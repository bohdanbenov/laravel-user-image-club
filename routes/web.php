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

Route::get('/', 'MainController@index')->name('home');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/images', 'ImageController@show');
Route::post('/images', 'ImageController@store');
Route::get('/images/{img_id}', 'ImageController@destroy');

Route::get('/admin', 'AdminController@index');
Route::get('/admin/sort', 'AdminController@sort');
Route::get('/admin/filter/country', 'AdminController@filterByCountry');
Route::get('/admin/filter/city', 'AdminController@filterByCity');
Route::get('/admin/filter/sex', 'AdminController@filterBySex');
Route::get('/admin/filter/age', 'AdminController@filterByAge');

Route::get('/randimg', 'MainController@generateRandomImage');
