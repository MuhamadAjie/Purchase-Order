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

Route::get('/halaman', function () {
    return view('admin.halaman');
});
Route::get('/contact', function () {
    return view('admin.contact');
});

Route::get('/charts', 'AdminController@charts');
Route::get('/calendar', 'AdminController@calendar');
Route::get('/inputpo', 'AdminController@inputpo');
Route::get('/flot', 'AdminController@flot');
Route::get('/invoice', 'AdminController@invoice');
Route::get('/pembayaran', 'AdminController@pembayaran');
Route::get('/profile', 'AdminController@profile');
Route::get('/fixed', 'AdminController@fixed');
Route::get('/boxed', 'AdminController@boxed');
Route::get('/dataPO', 'AdminController@dataPO');
Route::get('/pemba', 'AdminController@pemba');
Route::get('/inputsupplier', 'AdminController@inputsupplier');
Route::get('/inputinvoice', 'AdminController@inputinvoice');
Route::get('/inputpemba', 'AdminController@inputpemba');
Route::get('/inputbarang', 'AdminController@inputbarang');
Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
