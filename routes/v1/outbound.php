<?php

declare(strict_types=1);

use App\Http\Controllers\Outbound\EmailNotificationController;
use App\Http\Controllers\Outbound\FcmNotificationController;
use App\Http\Controllers\Outbound\NotificationController;
use App\Http\Controllers\Outbound\SmsNotificationController;
use Illuminate\Support\Facades\Route;

Route::prefix('outbound')->group(function () {
    Route::post('send', NotificationController::class);

    Route::post('sms/send', SmsNotificationController::class);

    Route::post('email/send', EmailNotificationController::class);

    Route::post('fcm/send', FcmNotificationController::class);
});
