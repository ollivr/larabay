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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/item/{item}', 'HomeController@item')->name('item');

Route::get('/seller', 'CallController@getSeller')->name('seller');
Route::get('/sellerList', 'CallController@getSellerList')->name('sellerList');
