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
// backend
Route::group([
	'prefix' => 'admin',
	'middleware' => 'auth',
	'namespace' => 'backend'
], function(){

	Route::get('/', 'AdminController@index');
	Route::get('/home', 'AdminController@home');

	// page news ข่าวและกิจกรรม
	Route::get('news/page/{page}', 'NewsController@pageNews');
	Route::resource('/news', 'NewsController');

	// page doctrines หลักธรรมคำสอน
	Route::group(['namespace' => 'doctrines'], function(){
		Route::resource('doctrines', 'DoctrinesController');
		Route::resource('authors', 'AuthorsController');
		Route::resource('keyword', 'DoctrinesKeywordController');
	});


//	Route::get('/', function(){
//		return 'Hello World';
//	});
});






// frontend
Route::get('/', 'FrontendController@index');
Route::group(['namespace' => 'frontend'], function(){

});
