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

Route::view('/', 'index')->name('getIndex');

Route::get('/profil-visiteur', 'ProfilVisiteurController@create');

Route::get('/inscription', 'InscriptionController@create');

Route::get('/message', 'MessageController@create');

Route::get('/mon-profil', 'MonProfilController@create');