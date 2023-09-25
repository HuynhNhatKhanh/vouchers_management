<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/vouchers', 'App\Http\Controllers\VoucherController@create');
Route::put('/vouchers/{id}', 'App\Http\Controllers\VoucherController@update');
Route::get('/batch/get-voucher-by-batch', 'App\Http\Controllers\BatchController@getVoucherByBatch');
Route::get('/get-voucher-user', 'App\Http\Controllers\VoucherController@getVoucherUser');
Route::post('/voucher-user/use/', 'App\Http\Controllers\VoucherUserController@useVoucher');

