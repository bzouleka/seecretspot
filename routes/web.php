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





Route::get('/signup', 'LoginController@create');


Route::get('/settings', 'SettingsController@create');

Route::post('/signup', 'LoginController@store')->name('signup');

Route::view('/', 'login')

Route::get('/mon-profil', 'MonProfilController@create');

Route::get('/message', 'MessageController@create');

Route::get('/profil-visiteur', 'ProfilVisiteurController@create');

Route::get('/HomePage',['uses' => 'HomePageController@getHomePage', 'as' => 'getHomePage']);