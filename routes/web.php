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





Route::post('/login', 'LoginController@create')->name('login');

Route::view('/', 'login');

Route::get('/settings', 'SettingsController@create');

Route::post('/signup', 'InscriptionController@store')->name('signup');

Route::get('/mon-profil', 'MonProfilController@create');

Route::get('/message', 'MessageController@create');

Route::get('/profil-visiteur', 'ProfilVisiteurController@create');

Route::get('/HomePage',['uses' => 'HomePageController@getHomePage', 'as' => 'getHomePage']);