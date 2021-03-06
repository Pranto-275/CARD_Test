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


Route::get('/', 'selectController@onSelect');

Route::get('/insert', 'selectController@insertform');




Route::post('/insertData', 'selectController@onInsert');




Route::get('/delete', 'selectController@deleteform');

Route::post('/deleteData', 'selectController@onDelete');
