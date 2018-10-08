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

Route::get('/', function () {
    return view('users.layout.layout');
})->name('home');

Route::get('login', function () {
	return view('login');
})->name('login');

Route::post('/auth', 'UserController@login')->name('auth');

Route::get('/logout', 'UserController@logout')->name('logout');