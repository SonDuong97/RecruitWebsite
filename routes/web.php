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

Route::put('/change-password','UserController@changePassword')->name('change-password');

Route::put('/forgot-password','UserController@forgotPassword')->name('forgot-password');

Route::get('/findByAddress', 'AddressController@findByAddress');

Route::get('/findByCompany', 'CompanyController@findByCompany');

Route::get('/job', 'JobController@showJob')->name('showJob');

Route::get('/searchJob', 'JobController@searchJob')->name('searchJob');

Route::get('/category/{id}', 'JobController@findByCategory')->name('category');

Route::get('/job-detail/{id}', 'JobController@showJobDetail');

Route::post('/favorite','UserController@addJobFavorite');

Route::get('/list-favorite', 'UserController@listFavorite')->name('list-favorite');

Route::delete('/delete-job-favorite','UserController@deleteJobFavorite');

Route::get('/form-post-job','JobController@showPostJob')->name('form-post-job');
Route::get('/test', 'UserController@test');




