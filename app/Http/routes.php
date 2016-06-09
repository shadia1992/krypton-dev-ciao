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

	Route::get('/home', function () {
    	return view('home');
	});

	Route::get('/login', function () {
    	return view('auth/login');
	});
	
	Route::get('/auth/login', 'AuthController@login');

    Route::group(['middleware' => ['auth']], function () {
        
        Route::get('/auth/logout', 'AuthController@logout');

		Route::group(['middleware' => ['acl']], function () {

			Route::get('/user', 'UserController@index');
			Route::get('/user/create', 'UserController@create');
			Route::post('/user', 'UserController@store');
			Route::get('/user/{id}', 'UserController@show');
			Route::get('/user/{id}/edit', 'UserController@edit');
			Route::put('/user/{id}', 'UserController@update');
			Route::delete('/user/{id}', 'UserController@destroy');

			Route::get('/theme', 'ThemeController@index');
			Route::get('/theme/create', 'ThemeController@create');
			Route::post('/theme', 'ThemeController@store');
			Route::get('/theme/{id}', 'ThemeController@show');
			Route::get('/theme/{id}/edit', 'ThemeController@edit');
			Route::put('/theme/{id}', 'ThemeController@update');
			Route::delete('/theme/{id}', 'ThemeController@destroy');

			Route::get('/subject', 'SubjectController@index');
			Route::get('/subject/create', 'SubjectController@create');
			Route::post('/subject', 'SubjectController@store');
			Route::get('/subject/{id}', 'SubjectController@show');
			Route::get('/subject/{id}/edit', 'SubjectController@edit');
			Route::put('/subject/{id}', 'SubjectController@update');
			Route::delete('/subject/{id}', 'SubjectController@destroy');

			Route::get('/discussion', 'DiscussionController@index');
			Route::get('/discussion/create', 'DiscussionController@create');
			Route::post('/discussion', 'DiscussionController@store');
			Route::get('/discussion/{id}', 'DiscussionController@show');
			Route::get('/discussion/{id}/edit', 'DiscussionController@edit');
			Route::put('/discussion/{id}', 'DiscussionController@update');
			Route::delete('/discussion/{id}', 'DiscussionController@destroy');

			Route::get('/comment', 'CommentController@index');
			Route::get('/comment/create', 'CommentController@create');
			Route::post('/comment', 'CommentController@store');
			Route::get('/comment/{id}', 'CommentController@show');
			Route::get('/comment/{id}/edit', 'CommentController@edit');
			Route::put('/comment/{id}', 'CommentController@update');
			Route::delete('/comment/{id}', 'CommentController@destroy');

			Route::get('/question', 'QuestionController@index');
			Route::get('/question/create', 'QuestionController@create');
			Route::post('/question', 'QuestionController@store');
			Route::get('/question/{id}', 'QuestionController@show');
			Route::get('/question/{id}/edit', 'QuestionController@edit');
			Route::put('/question/{id}', 'QuestionController@update');
			Route::delete('/question/{id}', 'QuestionController@destroy');

			Route::get('/response', 'ResponseController@index');
			Route::get('/response/create', 'ResponseController@create');
			Route::post('/response', 'ResponseController@store');
			Route::get('/response/{id}', 'ResponseController@show');
			Route::get('/response/{id}/edit', 'ResponseController@edit');
			Route::put('/response/{id}', 'ResponseController@update');
			Route::delete('/response/{id}', 'ResponseController@destroy');

			Route::get('/tag', 'TagController@index');
			Route::get('/tag/create', 'TagController@create');
			Route::post('/tag', 'TagController@store');
			Route::get('/tag/{id}', 'TagController@show');
			Route::get('/tag/{id}/edit', 'TagController@edit');
			Route::put('/tag/{id}', 'TagController@update');
			Route::delete('/tag/{id}', 'TagController@destroy');
        });
    });

	Route::get('/user/create', 'UserController@create');
	Route::post('/user', 'UserController@store');

	Route::get('/theme', 'ThemeController@index');
	Route::get('/tag', 'TagController@index');
	Route::get('/subject', 'SubjectController@index');
	Route::get('/response', 'ResponseController@index');
	Route::get('/discussion', 'DiscussionController@index');
	Route::get('/question', 'QuestionController@index');
	Route::get('/comment', 'CommentController@index');

	Route::get('/theme/{id}', 'ThemeController@show');
	Route::get('/tag/{id}', 'TagController@show');
	Route::get('/subject/{id}', 'SubjectController@show');
	Route::get('/response/{id}', 'ResponseController@show');
	Route::get('/discussion/{id}', 'DiscussionController@show');
	Route::get('/question/{id}', 'QuestionController@show');
	Route::get('/comment/{id}', 'CommentController@show');
});