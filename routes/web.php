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

    Route::get('/posts/create', 'PostController@create');
});
Route::get('/', 'FrontController@showhome');
Route::get('/joblist', 'FrontController@showJoblist');
Route::get('/search', 'PostController@search');
Route::get('/search1', 'FrontController@search1');
Route::get('/search2', 'PostController@search2');
Route::get('/search3', 'PostController@search3');
Route::get('/search4', 'PostController@search4');

Route::get('/category', 'FrontController@showCategory');
Route::get('/company', 'FrontController@showCompany');
Route::get('/location', 'FrontController@showLocation');
Route::get('/register', 'FrontController@showRegistration');
Route::get('/companyDashboard', 'DasboardController@index');
//Route::get('/company', 'FrontController@showCompanyDashboard');

Route::resource('CompanyPost', 'ComController');


Route::resource('posts', 'PostController');
Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
