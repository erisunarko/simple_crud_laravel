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

Route::get('/halo', function () {
    return ('santai kayak di pantai . . . . .');
});

Route::get('contents', 'ContentsController@index');


Route::get('/latihan01', 'Latihan01Controller@index');
Route::get('/latihan01/html', 'Latihan01Controller@getPage');
Route::get('/latihan01/tes', 'Latihan01Controller@printText');
Route::get('/latihan01/coba', 'Latihan01Controller@coba');

Route::resource('siswa', 'SiswaController');