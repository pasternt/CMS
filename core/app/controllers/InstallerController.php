<?php

class InstallerController extends BaseController {

	public function GET_Welcome()
	{
		return View::make('install.welcome', ['page'=>'Willkommen!', 'current'=>'welcome']);
	}

    public function GET_Database(){
        return View::make('install.database', ['page'=>'Datenbank', 'current'=>'database']);
    }

    public function POST_Database(){
        $input = \Illuminate\Support\Facades\Input::get();

        /*
         *  Prepare config
         */

$config = "
        <?php

        return array(

            'fetch' => PDO::FETCH_CLASS,
            'default' => 'mysql',
            'connections' => array(

                'mysql' => array(
                    'driver'    => 'mysql',
                    'host'      => '".$input['host']."',
                    'database'  => '".$input['database']."',
                    'username'  => '".$input['username']."',
                    'password'  => '".$input['password']."',
                    'charset'   => 'utf8',
                    'collation' => 'utf8_unicode_ci',
                    'prefix'    => '',
                ),

            ),

            'migrations' => 'migrations',
            'redis' => array(

                'cluster' => false,

                'default' => array(
                    'host'     => '127.0.0.1',
                    'port'     => 6379,
                    'database' => 0,
                ),

            ),

        );

        ";
        chmod(getcwd().'/core/app/config/database.php', 0777);
        $file = file_put_contents(getcwd().'/core/app/config/database.php', $config);
        try
        {
            DB::connection();
        }catch(Exception $e) {
            Session::flash('failed', true);
            return \Illuminate\Support\Facades\Redirect::to('install/database')->withInput(Input::except('password'));
        }
        return \Illuminate\Support\Facades\View::make('install.import', ['page'=>'Datenbank', 'current'=>'database']);
    }
    public function GET_Import(){
        \Illuminate\Support\Facades\DB::statement("CREATE TABLE IF NOT EXISTS `users` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `username` varchar(255) NOT NULL,
              `password` varchar(255) NOT NULL,
              `ip` varchar(255) NOT NULL,
              `active` int(11) NOT NULL,
              `admin` int(11) NOT NULL,
              `remember_token` varchar(255) NOT NULL,
              `email` varchar(255) NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;");
        return \Illuminate\Support\Facades\Redirect::to('install/user');
    }
    public function GET_User(){
        return View::make('install.user', ['page'=>'Nutzer anlegen', 'current'=>'user']);
    }
    public function POST_User(){
        $input = \Illuminate\Support\Facades\Input::get();
        $id = DB::table('users')->insertGetId(
            array('email' => $input['email'], 'username' => $input['username'], 'password'=>Hash::make($input['password']), 'active'=>1, 'admin'=>1, 'ip'=>$_SERVER['REMOTE_ADDR'])
        );
        Auth::loginUsingId($id);


        return \Illuminate\Support\Facades\Redirect::to('install/finished');
    }
    public function GET_Finished(){
        $myfile = fopen(storage_path().'/cache/installer.lock', "w");
        $txt = "Was erwartest du denn in dieser Datei? ;)";
        fwrite($myfile, $txt);
        fclose($myfile);
        return View::make('install.finish', ['page'=>'Fertig!', 'current'=>'finish']);
    }

}
