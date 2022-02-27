<?php

use Illuminate\Support\Facades\Route;

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

// HOME PAGE
Route::get('/', 'App\Http\Controllers\AppController@index');

// BOOKS PAGE
Route::get('/books', 'App\Http\Controllers\BookController@index');

// CONTACT US PAGE
Route::get('/contact-us', 'App\Http\Controllers\AppController@contact');

// MANAGE BOOKS PAGE
Route::get('/books/manage', 'App\Http\Controllers\BookController@manage');

// ADD BOOK PAGE
Route::get('/books/add', 'App\Http\Controllers\BookController@add');
Route::post('/books/add', 'App\Http\Controllers\BookController@store');

// EDIT BOOK PAGE
Route::get('/books/{id}', 'App\Http\Controllers\BookController@edit');
Route::put('/books/{id}', 'App\Http\Controllers\BookController@update');

// DELETE BOOK
Route::delete('/books/{id}', 'App\Http\Controllers\BookController@destroy');