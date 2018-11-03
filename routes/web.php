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
    return view('front.pages.home');
});
Route::get('/product', 'ProductController@index');
Route::get('/product/get-json', 'ProductController@getJson');

Route::get('admin/product', 'ProductAdminController@index');
Route::get('admin/product/create', 'ProductAdminController@create');
Route::post('admin/product/store', 'ProductAdminController@store')->name('store_product');