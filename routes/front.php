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

Route::get('/', function () {
    return view('welcome');
});


//Auth
Route::group(['namespace' => 'Auth'], function () {
	Route::get('register', 'UserauthController@getRegister');
	Route::post('register', 'UserauthController@postRegister');
	Route::get('login', 'UserauthController@getLogin');
	Route::post('login', 'UserauthController@postLogin');
	Route::get('logout', 'UserauthController@getLogout');
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('home', function () {
		$user = Auth::user()->get();
		dd($user);
	});
});

Route::get('test', function () {
	$value = Request::session()->all();
	dd($value);
});