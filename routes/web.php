<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('room', 'RoomController');

Route::resource('client', 'ClientController');

Route::get('booking', 'PageController@booking')->name('booking');

Route::get('gallery', 'PageController@gallery')->name('gallery');

Route::get('rooms', 'PageController@rooms')->name('rooms');

Route::get('cuisine', 'PageController@cuisine')->name('cuisine');

Route::resource('/admin/dashboard', 'PageController');