<?php

/* Static Pages */
// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');

Route::get('/', 'MainController@getIndex');
Route::get('about', 'MainController@getAbout');
Route::get('contact', 'MainController@getContact');
Route::get('category', 'MainController@getCategory');


/* NEED AUTH */
Route::group(array('before' => 'auth'), function() {
    //Route::get('dashboard', 'UserController@getDashboard');
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