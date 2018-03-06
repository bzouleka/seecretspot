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

Route::get('/signup', 'SignUpController@create')->name('signup');

Route::get('/settings', 'SettingsController@create')->name('settings');

Route::get('/myProfile', 'MyProfileController@create')->name('profileUser');

Route::view('/', 'login');

Route::get('/message', 'MessageController@create')->name('message');

Route::get('/spot', ['uses' => 'SpotController@getNewSpot', 'as' => 'newSpot']);

Route::get('/HomePage',['uses' => 'HomePageController@getHomePage', 'as' => 'getHomePage']);

Route::post('/HomePage',['uses' => 'HomePageController@getHomePage', 'as' => 'HomePage']);

Route::get('/', 'SignUpController@store')->name('login');

Route::post('/', 'SignUpController@store')->name('login');



Route::get('/hobbies', 'hobbyController@create')->name('hobbies');




