<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



    Route::get('/', 'indexController@getIndex')->name('index');

    Route::get('/about','aboutController@getAbout')->name('about');

    Route::get('/contact','contactController@getContact')->name('contact');
    Route::post('/contact','contactController@postContact')->name('contact');

    Route::get('/contactFormSubmit','contactController@getFormSubmit')->name('contactFormSubmit');


Route::group(['middleware' => 'guest'], function () {

    Route::get('/signUp', 'userController@getSignUp')->name('user.signUp');
    Route::post('/signUp', 'userController@postSignUp')->name('user.signUp');

    Route::get('/signIn', 'userController@getSignIn')->name('user.signIn');
    Route::post('/signIn', 'userController@postSignIn')->name('user.signIn');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'userController@profile')->name('user.profile');
    Route::get('/logout', 'userController@logOut')->name('user.logOut');
    Route::get('/settings', 'userController@getSettings')->name('user.settings');


});
