<?php

use Illuminate\Support\Facades\Route;

Route::prefix('outbound')->group(function () {
    Route::post('send', \App\Http\Controllers\Outbound\NotificationController::class);

    Route::post('sms', \App\Http\Controllers\Outbound\SmsNotificationController::class);

    Route::post('email', \App\Http\Controllers\Outbound\EmailNotificationController::class);

    Route::post('fcm', \App\Http\Controllers\Outbound\FcmNotificationController::class);
});
