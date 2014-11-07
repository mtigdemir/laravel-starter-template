<?php

/* Static Pages */
Route::get('/', 'MainController@getIndex');
Route::get('about', 'MainController@getAbout');
Route::get('contact', 'MainController@getContact');
Route::get('category', 'MainController@getCategory');


/*Route Action Pages*/
Route::get('register', 'MainController@getRegister');
Route::get('login', 'MainController@getLogin');
Route::get('logout', 'MainController@getLogout');
Route::post('signin', 'MainController@postSignin');
Route::post('create', 'MainController@postCreate');

/* NEED AUTH */
Route::group(array('before' => 'auth'), function() {
    Route::get('dashboard', 'UserController@getDashboard');
    Route::get('me', 'UserController@getMe');
    Route::controller('user', 'UserController');
});

Route::controller('password', 'RemindersController');

/*App::missing(function($exception) {
    return Response::view('errors.missing', array(), 404);
});


App::error(function(RuntimeException $exception)
{
    Log::error($exception);

    return 'Runtine';
});

App::error(function(InvalidUserException $exception)
{
    Log::error($exception);

    return 'INVALID';
});

App::fatal(function($exception)
{
     return 'FATAL';
});*/
