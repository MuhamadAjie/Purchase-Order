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
Route::get('/inputpembayaran', 'AdminController@inputpembayaran');
Route::get('/inputbarang', 'AdminController@inputbarang');

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'product'], function() {
        Route::get('/', 'ProductController@index');
        Route::get('/new', 'ProductController@create');
        Route::post('/', 'ProductController@save');
        Route::get('/{id}', 'ProductController@edit');
        Route::put('/{id}', 'ProductController@update');
        Route::delete('/{id}', 'ProductController@destroy');
    });
    
    Route::group(['prefix' => 'customer'], function() {
        Route::get('/', 'CustomerController@index');
        Route::get('/new', 'CustomerController@create');
        Route::post('/', 'CustomerController@save');
        Route::get('/{id}', 'CustomerController@edit');
        Route::put('/{id}', 'CustomerController@update');
        Route::delete('/{id}', 'CustomerController@destroy');
    });
    
    Route::group(['prefix' => 'purchase'], function() {
        Route::get('/', 'PurchaseController@index')->name('purchase.index');
        Route::get('/new', 'PurchaseController@create')->name('purchase.create');
        Route::post('/', 'PurchaseController@save')->name('purchase.store');
        Route::get('/{id}', 'PurchaseController@edit')->name('purchase.edit');
        Route::put('/{id}', 'PurchaseController@update')->name('purchase.update');
        Route::delete('/{id}', 'PurchaseController@deleteProduct')->name('purchase.delete_product');
        Route::delete('/{id}/delete', 'PurchaseController@destroy')->name('purchase.destroy');
        Route::get('/{id}/print', 'PurchaseController@generatePurchase')->name('purchase.print');
    });
    
    Route::group(['prefix' => 'invoice'], function() {
        Route::get('/', 'InvoiceController@index')->name('invoice.index');
        Route::get('/new', 'InvoiceController@create')->name('invoice.create');
        Route::post('/', 'InvoiceController@save')->name('invoice.store');
        Route::get('/{id}', 'InvoiceController@edit')->name('invoice.edit');
        Route::put('/{id}', 'InvoiceController@update')->name('invoice.update');
        Route::delete('/{id}', 'InvoiceController@deleteProduct')->name('invoice.delete_product');
        Route::delete('/{id}/delete', 'InvoiceController@destroy')->name('invoice.destroy');
        Route::get('/{id}/print', 'InvoiceController@generateInvoice')->name('invoice.print');
    });
});