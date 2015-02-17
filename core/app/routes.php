<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/*
|
|   Installer-Routen
|
*/
if(!file_exists(storage_path().'/cache/installer.lock')){
    Route::get('install', 'InstallerController@GET_Welcome');
    Route::get('install/database', 'InstallerController@GET_Database');
    Route::post('install/database', 'InstallerController@POST_Database');
    Route::get('install/database/import', 'InstallerController@GET_Import');
    Route::get('install/user', 'InstallerController@GET_User');
    Route::post('install/user', 'InstallerController@POST_User');
    Route::get('install/finished', 'InstallerController@GET_Finished');
}