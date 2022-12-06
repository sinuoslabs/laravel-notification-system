<?php

declare(strict_types=1);

use App\Http\Controllers\Outbound\{EmailNotificationController,
    FcmNotificationController,
    NotificationController,
    SmsNotificationController
};
use Illuminate\Support\Facades\Route;

Route::prefix('outbound')->group(function () {
    Route::post('send', NotificationController::class);

    Route::post('sms', SmsNotificationController::class);

    Route::post('email', EmailNotificationController::class);

    Route::post('fcm', FcmNotificationController::class);
});
