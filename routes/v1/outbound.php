<?php

declare(strict_types=1);

use App\Http\Controllers\Outbound\EmailController;
use App\Http\Controllers\Outbound\PushController;
use App\Http\Controllers\Outbound\NotificationController;
use App\Http\Controllers\Outbound\SmsController;
use App\Http\Controllers\Outbound\WebhookController;
use Illuminate\Support\Facades\Route;

Route::prefix('outbound')->group(function () {
    Route::post('send', NotificationController::class);

    Route::post('sms/send', SmsController::class);

    Route::post('email/send', EmailController::class);

    Route::post('fcm/send', PushController::class);

    Route::post('webhook', WebhookController::class);
});
