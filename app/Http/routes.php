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

Route::get('/dbtest', function () {
    if(DB::connection()->getDatabaseName())
    {
        echo "connected sucessfully to database ".DB::connection()->getDatabaseName();
        $results = DB::select('select * from migrations');
        return $results;

    }
});


Route::get('/user/', 'UserController@index');
Route::get('/subject/', 'SubjectController@index');





