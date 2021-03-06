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
    return view('data');
});
Route::get('/data-tables', function () {
    return view('data_tables');
});
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::post('/store','PertanyaanController@store');