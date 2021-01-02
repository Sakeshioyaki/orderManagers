<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('order', 'App\Http\Controllers\OrderController@order');
Route::match(['GET','POST'], 'listOrder','App\Http\Controllers\OrderController@getListOrder' );
Route::get('order/{order_id}','App\Http\Controllers\OrderController@orderDetail');

