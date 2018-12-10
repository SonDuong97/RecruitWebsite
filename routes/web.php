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

Route::get('category/{id}', 'JobController@findByCategory')->name('category');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
	Route::get('/jobs', ['as' => 'index', 'uses' => 'JobController@index']);
	Route::get('/jobs/create', ['as' => 'create', 'uses' => 'JobController@create']);

	Route::get('/addresses', ['as' => 'index', 'uses' => 'AddressController@index']);
	Route::get('/address/create', ['as' => 'create', 'uses' => 'AddressController@create']);
	Route::get('/categories', ['as' => 'index', 'uses' => 'CategoryController@index']);
	Route::get('/category/create', ['as' => 'create', 'uses' => 'CategoryController@create']);
	Route::get('/users', ['as' => 'index', 'uses' => 'UserController@index']);
	Route::get('/user/create', ['as' => 'create', 'uses' => 'UserController@create']);

	Route::get('/companies', ['as' => 'index', 'uses' => 'CompanyController@index']);
	Route::get('/company/create', ['as' => 'create', 'uses' => 'CompanyController@create']);

});
