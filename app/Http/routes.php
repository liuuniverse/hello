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

/*
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
*/
Route::get('/','HomeController@index');
Route::get('wow/{id?}', 'WowController@index');
Route::get('hello/{name?}', function($name=null){
	return 'hello world!!'.$name;
});
Route::get('ok/{name?}', function($name=null){
	return 'hello world!!'.$name;
});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('/','AdminHomeController@index');
	Route::resource('pages','PagesController');
});
Route::get('auth/login','Auth/AuthController@getLogin');
Route::post('auth/logn','Auth/AuthController@postLogin');
Route::get('auth/logout','Auth/AuthController@getLogout');
Route::get('pages/{id}','PagesController@show');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
