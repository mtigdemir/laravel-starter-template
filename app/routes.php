<?php

/* Static Pages */
// Confide routes
Route::get('create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('login', 'UsersController@login');
Route::post('login', 'UsersController@doLogin');
Route::get('confirm/{code}', 'UsersController@confirm');
Route::get('forgot_password', 'UsersController@forgotPassword');
Route::post('forgot_password', 'UsersController@doForgotPassword');
Route::get('reset_password/{token}', 'UsersController@resetPassword');
Route::post('reset_password', 'UsersController@doResetPassword');
Route::get('logout', 'UsersController@logout');

Route::get('/', 'MainController@getIndex');
Route::get('about', 'MainController@getAbout');
Route::get('contact', 'MainController@getContact');
Route::get('faq', 'MainController@getFaq');
Route::get('category', 'MainController@getCategory');


/* Need User AUTH */
Route::group(array('before' => 'auth'), function() {
    Route::get('dashboard', 'UsersController@getDashboard');
});

//Need Admin Auth
Route::group(array('before' => 'auth|admin'), function() {
    Route::controller('admin', 'AdminController');
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