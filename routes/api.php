<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('inbound')->group(function () {

});

Route::prefix('Outbound')->group(function () {
//    Route::post('send', '');
//
//    Route::post('sms', '');
//    Route::post('email', '');
//    Route::post('fcm', '');
//    Route::post('slack', '');
//    Route::post('telegram', '');
});
