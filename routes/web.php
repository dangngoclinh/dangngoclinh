<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(array('prefix' => 'facebook', 'namespace' => 'Facebook'), function() {
	Route::get('/', 'FacebookController@index')->name('facebook');

	Route::get('loginfb', 'FacebookController@loginfb')->name('facebookloginfb');

	Route::get('loginfbcallback', 'FacebookController@loginFBCallback')->name('facebookloginfbcallback');

	// Install
	Route::get('install', 'InstallController@index')->name('facebookinstall');

	Route::get('group/add', 'GroupController@add')->name('facebookgroupadd');

	Route::get('group/search/{id}', 'GroupController@group_search');
});
