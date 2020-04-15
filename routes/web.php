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

Route::get('/', 'KulinerController@index');

Route::get('/search', 'KulinerController@search');

Route::get('/kuliner', 'KulinerController@kuliner');

Route::get('/kuliner/tambah', 'KulinerController@create');

Route::get('/kuliner/{kuliner}', 'KulinerController@show');

Route::get('/kategori', 'KulinerController@kategori');
