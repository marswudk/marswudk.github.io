
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

Route::get('/', 'FrontController@index' );
Route::get('/about', 'FrontController@about');
Route::get('/news', 'FrontController@news');
Route::get('/news/{id}', 'FrontController@news_detail');
Route::get('/products', 'FrontController@product');
// products' content page
Route::get('/products/{id}', 'FrontController@product_detail');

Route::get('/contact', 'FrontController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
