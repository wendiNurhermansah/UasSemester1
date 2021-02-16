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

Route::resource('elektronik', 'TokoController');
Route::get('/DaftarProduk', 'TokoController@DaftarProduk');
Route::get('/tambahProduk', 'TokoController@create');
Route::post('/tambahData', 'TokoController@store');
Route::get('/edit/{id}', 'TokoController@edit');
Route::patch('/update/{id}', 'TokoController@update');
Route::get('/delete/{id}', 'TokoController@destroy');




