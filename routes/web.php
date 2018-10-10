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

Route::get('/','UserController@home')->name('home');

Route::get('/login', 'UserController@showLogin')->name('login');

Route::post('/auth', 'UserController@login')->name('auth');

Route::get('/logout', 'UserController@logout')->name('logout');

Route::get('/signup','UserController@showSignup')->name('showSignup');

Route::post('/sign','UserController@signup')->name('sign');

Route::get('/reset-password','UserController@showResetPassword')->name('reset-password');

Route::post('/change-password','UserController@changePassword')->name('change-password');

