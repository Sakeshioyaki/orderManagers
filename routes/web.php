<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


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
// Route::get('/order_detail','App\Http\Controllers\OrderController@orderDetail');

// Route::post('order', 'app/Http/Controllers/OrderController@order');
// Route::get('listOrder', 'app/Http/Controllers/OrderController@getListOrder');
