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

Route::view('/', 'welcome');

Route::view('/calc', 'calculate');

Route::get('/twitchlist', 'PageController@twitchlist');

Route::resource('plants', 'PlantController');

Route::resource('waterings', 'WateringController')->only([
    'store'
]);
