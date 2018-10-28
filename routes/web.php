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
// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'HomeController@index');
Route::get('/product', 'ProductController@index');
Route::get('/product/get-json', 'ProductController@getJson');

Route::get('admin', 'AdminBlogController@index');

//Route::prefix('admin')->group(['middleware' => 'admin'], function () {
//Route::group( 'admin', function () {
////    Route::get('/', 'AdminBlogController@index');
//});
