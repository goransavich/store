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



Route::get('/books', 'CategoriesController@show');

Route::get('books/{catid}', 'BooksController@display');

Route::get('bookdetails/{isbn}', 'BooksController@show');

Route::get('/insert', 'BooksController@create');

Route::post('/insert', 'BooksController@store');

Route::post('purchaces/{amount}', 'PurchaseController@store');

Route::get('/gift', 'GiftController@show');

Route::get('/login', 'SessionController@create');

Route::post('/login', 'SessionController@store');


