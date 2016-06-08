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
<<<<<<< HEAD
=======
use App\Models\Theme;
>>>>>>> f2e5e1de5eeb5e85be08cc278f5b8b19dc6baba3

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======

Route::get('/dbtest', function () {
    if(DB::connection()->getDatabaseName())
    {
        echo "connected sucessfully to database ".DB::connection()->getDatabaseName();
        return 	Theme::where('name', 'like','Sexualité%')->first()->id;

    }
});

<<<<<<< HEAD
<<<<<<< HEAD
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
=======

Route::get('/user/', 'UserController@index');
Route::get('/subject/', 'SubjectController@index');
>>>>>>> 4f7ba9ef4c259c657984087123453cdb52e93ff7
=======

Route::get('/user/', 'UserController@index');
Route::get('/subject/', 'SubjectController@index');
>>>>>>> 4f7ba9ef4c259c657984087123453cdb52e93ff7





>>>>>>> f2e5e1de5eeb5e85be08cc278f5b8b19dc6baba3
