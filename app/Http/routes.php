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

<<<<<<< 424b323dfd756b75a62d7058254fc0d212d3186e
Route::get('/user', 'UserController@index');

Route::post('/user/register', 'UserController@store');

Route::get('/login', 'AuthController@login');

    /*
     * AUTH OK
     */
    Route::group(['middleware' => ['auth']], function () {
        
        	Route::get('logout', 'AuthController@logout');
        
            Route::get('/show/', 'UserController@show');
            Route::post('/album/', 'RestController@store');
            Route::delete('/album/', 'RestController@destroy');             
            
      
        });


Route::get('/user/', 'UserController@index');
Route::get('/subject/', 'SubjectController@index');


Route::get('/user/', 'UserController@index');
Route::get('/subject/', 'SubjectController@index');






=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> Get proj
