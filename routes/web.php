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

Route::get('/orders', 'OrdersController@index');

Route::post('/orders', 'OrdersController@store');

Route::patch('/orders/{order}', 'OrdersController@update');

Route::delete('/orders/{order}', 'OrdersController@destroy');

Route::get('/orders/create', 'OrdersController@create');

Route::get('/orders/{order}', 'OrdersController@show');
