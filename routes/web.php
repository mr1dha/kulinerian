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

Route::get('/search', 'KulinerController@index');

Route::get('/kuliner', 'KulinerController@index');

Route::get('/admin/tambah', 'KulinerController@create');

Route::post('/admin/tambah', 'KulinerController@store');

Route::get('/kuliner/{kuliner}', 'KulinerController@show');

Route::get('/kategori', 'KulinerController@kategori');

Route::get('/admin', 'KulinerController@admin');

Route::delete('/admin/delete/{kuliner}', 'KulinerController@destroy');

Route::get('/cari/{keyword}','KulinerController@cari');

Route::post('/pencarian', 'KulinerController@pencarian');

Route::get('/admin/login', 'PageController@login');

Route::post('/admin/login', 'PageController@validasi');

Route::get('/admin/logout', 'PageController@logout');

Route::get('/admin/edit/{kuliner}', 'KulinerController@edit');

Route::patch('/admin/edit/{kuliner}', 'KulinerController@update');

Route::get('/kategori/{keyword}', 'KulinerController@kategori');