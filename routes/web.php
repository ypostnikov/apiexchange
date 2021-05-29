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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/external/get/{data}/{currency?}', 'CbrProviderController@get');
Route::post('/api/collection/save', 'CurrencyExchangeController@save');
Route::get('/api/collection/get/{uid}/{currency?}', 'CurrencyExchangeController@get');
Route::put('/api/collection/comment/save', 'CurrencyExchangeController@saveComment');
