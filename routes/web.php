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

Route::post('/favorite','JobFavoriteController@addJobFavorite');

Route::get('/list-favorite', 'JobFavoriteController@listFavorite')->name('list-favorite');

Route::delete('/delete-job-favorite','JobFavoriteController@deleteJobFavorite');

Route::get('/form-post-job','JobController@showPostJob')->name('form-post-job');

Route::post('/signup-company', 'CompanyController@signupCompany')->name('signupCompany');

Route::post('/add-job','JobController@addJob')->name('addJob');

Route::post('/send-cv','UserApplyController@sendCV')->name('sendCV');

Route::get('/my-recruit','UserController@getRecruit')->name('my-recruit');

Route::delete('/delete-recruit', 'UserController@deleteRecruit');

Route::get('/user-apply/{jobID}','UserApplyController@listUserApply');

Route::get('/edit-info','UserController@formEditInfo')->name('edit-info');

Route::put('/update-info','UserController@updateInfo');
Route::get('/test', 'UserApplyController@test');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
	Route::get('/jobs', ['as' => 'index', 'uses' => 'JobController@index']);
	Route::get('/jobs/create', ['as' => 'create', 'uses' => 'JobController@create']);
	Route::post('/jobs/destroy/{id}', ['as' => 'jobs.destroy', 'uses' => 'JobController@destroy']);



	Route::get('/addresses', ['as' => 'index', 'uses' => 'AddressController@index']);
	Route::get('/address/create', ['as' => 'create', 'uses' => 'AddressController@create']);
	Route::post('/addresses/destroy/{id}', ['as' => 'addresses.destroy', 'uses' => 'AddressController@destroy']);



	Route::get('/categories', ['as' => 'index', 'uses' => 'CategoryController@index']);
	Route::get('/category/create', ['as' => 'create', 'uses' => 'CategoryController@create']);
	Route::post('/categories/destroy/{id}', ['as' => 'categories.destroy', 'uses' => 'CategoryController@destroy']);



	Route::get('/users', ['as' => 'index', 'uses' => 'UserController@index']);
	Route::get('/user/create', ['as' => 'create', 'uses' => 'UserController@create']);
	Route::post('/users/destroy/{id}', ['as' => 'users.destroy', 'uses' => 'UserController@destroy']);



	Route::get('/companies', ['as' => 'index', 'uses' => 'CompanyController@index']);
	Route::get('/company/create', ['as' => 'create', 'uses' => 'CompanyController@create']);
	Route::post('/companies/destroy/{id}', ['as' => 'companies.destroy', 'uses' => 'CompanyController@destroy']);

});
