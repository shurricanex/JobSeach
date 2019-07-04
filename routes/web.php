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

Route::group(['middleware'=>'auth'], function(){

    Route::resource('posts', 'PostController');
});
Route::get('/', 'FrontController@showhome');
Route::get('/joblist', 'FrontController@showJoblist');
Route::get('/search', 'PostController@search');
Route::get('/search1', 'FrontController@search1');
Route::get('/search2', 'FrontController@search2');

Route::get('/category', 'FrontController@showCategory');
Route::get('/company', 'FrontController@showCompany');
Route::get('/location', 'FrontController@showLocation');
Route::get('/register', 'FrontController@showRegistration');
//Route::get('/company', 'FrontController@showCompanyDashboard');


Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
