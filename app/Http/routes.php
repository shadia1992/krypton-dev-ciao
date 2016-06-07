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

Route::get('/db', function () {
    if(DB::connection()->getDatabaseName())
    {

        echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
        $users = DB::table('users');
    }
});

Route::get('/users', 'UserController@index');

Route::post('/user', 'UserController@store');





