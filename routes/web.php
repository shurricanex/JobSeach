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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'FrontController@showhome');
Route::get('/joblist', 'FrontController@showJoblist');
Route::get('/category', 'FrontController@showCategory');
Route::get('/company', 'FrontController@showCompany');
Route::get('/location', 'FrontController@showLocation');

Route::resource('posts', 'PostController');
