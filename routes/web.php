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

Route::get('/', 'CusitController@index')->name('index');
Route::get('/sobre', 'CusitController@sobre')->name('sobre');
Route::get('/contato', 'CusitController@contato')->name('contato');
Route::get('/comentar', 'CusitController@comentar')->name('comentar');
Route::get('/sucesso', 'CusitController@sucesso')->name('sucesso');
Route::post('/comentar', 'CusitController@comentar_form')->name('comentar_form');