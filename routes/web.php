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

Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store')->name('postLogin');

Route::get('/signup', 'SignUpController@create')->name('signup');
Route::post('/signup', 'SignUpController@store')->name('postSignup');


Route::group([
        'middleware' => 'App\Http\Middleware\Auth',
], function() {

    Route::get('/settings', 'SettingsController@create')->name('settings');
    Route::post('/settings', 'SettingsController@update')->name('postSettings');

    Route::get('/myProfile', 'MyProfileController@create')->name('myProfile');
    Route::post('/myProfile', 'MyProfileController@post')->name('postMyProfile');

    Route::get('/userProfile', 'UserProfileController@create')->name('userProfile');
    Route::post('/userProfile', 'UserProfileController@post')->name('postUserProfile');

    Route::get('/', ['uses' => 'HomePageController@create', 'as' => 'homePage']);

    Route::get('/newSpot', ['uses' => 'NewSpotController@create', 'as' => 'newSpot']);
    Route::post('/newSpot', ['uses' => 'NewSpotController@store', 'as' => 'postNewSpot']);

    Route::get('/spot', ['uses' => 'SpotController@create', 'as' => 'spot']);
    Route::post('/spot', ['uses' => 'SpotController@store', 'as' => 'postSpot']);

    Route::get('/results', ['uses' => 'ResultsController@create', 'as' => 'results']);

// à Voir plus tard
    Route::get('/message', 'MessageController@create')->name('message');

    Route::get('/hobbies', 'SettingsController@create')->name('hobbies');
    Route::post('/hobbies', 'SettingsController@store')->name('postHobbies');

});
