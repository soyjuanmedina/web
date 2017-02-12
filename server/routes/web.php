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

// Langing
Route::get('/', 'SiteController@showLandingPage')->name('landing');

Route::get('/login', 'SiteController@redirectLogin')->name('login');

// Auth
Route::group(['prefix' => 'auth'], function () {

	Route::get('redirect', 'AuthController@redirectToProvider')->name('auth-redirect');
	Route::get('callback', 'AuthController@handleProviderCallback')->name('auth-callback');
	Route::get('deny', 'AuthController@showProfile')->name('auth-deny'); //TODO
	Route::get('logout', 'AuthController@logout')->name('auth-logout')->middleware('auth');

});

// Private
Route::group(['middleware' => 'auth'], function () {

	// Basic info page
	Route::get('/welcome', 'SiteController@showWelcomePage')->name('welcome');

	// People page
	Route::get('/people', 'SiteController@showPeoplePage')->name('people');
	Route::post('/people', 'SiteController@showPeoplePage')->name('store-basic-info');

});