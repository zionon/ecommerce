<?php

/*
Administrator Route
 */

Route::group(['namespace' => 'Auth'], function () {
	Route::get('admin/login', 'AdminauthController@getLogin');
	Route::post('admin/login', 'AdminauthController@postLogin');

	Route::get('admin/logout', 'AdminauthController@getLogout');

	Route::get('info', 'AdminauthController@test');
});

Route::group(['middleware' => 'admin.auth'], function () {
	Route::get('admin', function () {
		dd(Auth::admin()->get());
	});
});

// Route::get('admin', function () {
// 	dd(Auth::admin()->get());
// });
