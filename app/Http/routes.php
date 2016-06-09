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
Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
    	return view('welcome');
	});

	Route::get('/user', 'UserController@index');
	Route::get('/theme', 'ThemeController@index');
	Route::get('/theme/create', 'ThemeController@create');
	Route::get('/user/create', 'UserController@create');
	Route::post('/user', 'UserController@store');
	Route::get('/login', function () {
    	return 'ceci est la page de login';
	});
    
	Route::get('/auth/login', 'AuthController@login');

    Route::group(['middleware' => ['auth']], function () {
        
        Route::get('/logout', 'AuthController@logout');

		Route::group(['middleware' => ['aclRest']], function () {
			Route::get('/user/{id}', 'UserController@show');
			Route::get('/user/{id}/edit', 'UserController@edit');
			Route::put('/user/{id}', 'UserController@update');
			Route::delete('/user/{id}', 'UserController@destroy');
        });
    });
});