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
Route::group(['middleware' => ['web']], function(){
	
	Route::get('contact', 'PagesController@getContact');
	Route::get('about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	
	// Authentication Routes
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	
	// Registration Routes
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
	

	Route::get('/home', 'HomeController@index');
});
