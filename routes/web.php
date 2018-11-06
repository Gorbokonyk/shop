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

Route::get('/', function () {
    return view('main2');
});
Route::get('/product', 'ProductController@index');
Route::get('/product/get-json', 'ProductController@getJson');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/admin','Auth\AdminController@index');
Route::prefix('admin')->group(function() {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'Auth\AdminController@index')->name('admin.dashboard');


});
Route::get('/logout', 'Auth\AdminLoginController@logout')->name('logout');
