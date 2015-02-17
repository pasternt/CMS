<?php
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

/*
 *
 *  Öffentlich zugängliche Routen (eg. pages)
 *
 */

    Route::get('/', 'PageController@Index');
    Route::get('page/{seo_url}', 'PageController@CallPage');
    Route::get('sitemap', 'PageController@Sitemap');