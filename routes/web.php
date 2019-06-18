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
    return view('halaman');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/invoice', 'AdminController@invoice');
Route::get('/profile', 'AdminController@profile');
Route::get('/dataPO', 'AdminController@dataPO');
Route::get('/pembayaran', 'AdminController@pembayaran');
Route::get('/inputsupplier', 'AdminController@inputsupplier');
Route::get('/inputpo', 'AdminController@inputpo');
Route::get('/inputinvoice', 'AdminController@inputinvoice');
Route::get('/inputpembayaran', 'AdminController@inputpembayaran');
Route::get('/inputbarang', 'AdminController@inputbarang');

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');