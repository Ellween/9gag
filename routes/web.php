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


//Pages
Route::get('/','PagesController@getIndex');


// registraion and Login
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//Upload Post
Route::post('/upload','PostController@store');

//user profile update
Route::get('/settings/profile','UserController@getProfile');
Route::post('/settings/profile','UserController@storeProfile');
//user password update
Route::get('/settings/password','UserController@getPassword');
Route::post('/settings/password','UserController@storePassword');
//user account update
Route::get('/settings/account','UserController@getAccount');
Route::post('/settings/account','UserController@storeaccount');


//Update User profile


// admin ylis space
Route::get('/admin/index', 'AdminController@index');
Route::get('/admin/category','AdminController@getCategory');
Route::post('/admin/category','AdminController@storeCategory');
Route::get('/admin/users','AdminController@getUsers');
