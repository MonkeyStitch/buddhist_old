<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::controllers([
	'system' => 'Auth\AuthController',
]);


// frontend
Route::get('/', 'FrontendController@index');
Route::group(['namespace' => 'frontend'], function(){

});


// backend
Route::group([
	'prefix' => 'admin',
	'middleware' => 'auth',
	'namespace' => 'backend'
], function(){

	Route::get('/', 'AdminController@index');
	Route::get('/home', 'AdminController@home');
	Route::get('news/{page}', 'AdminController@news');

	Route::resource('/news', 'NewsController');
//	Route::get('news', function(){
//		return 'test';
//	});
});
