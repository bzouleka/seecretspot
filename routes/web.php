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


Route::get('/', 'SignUpController@store')->name('login');

Route::post('/', 'SignUpController@store')->name('login');

Route::view('/', 'login');

Route::get('/HomePage',['uses' => 'HomePageController@getHomePage', 'as' => 'getHomePage']);

Route::post('/HomePage',['uses' => 'HomePageController@getHomePage', 'as' => 'HomePage']);

Route::get('/Message', 'MessageController@create')->name('message');



