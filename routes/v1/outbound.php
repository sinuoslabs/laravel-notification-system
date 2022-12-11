<?php

declare(strict_types=1);

use Infrastructure\Web\Controllers\Outbound\OutboundEmailController;
use Infrastructure\Web\Controllers\Outbound\OutboundPushController;
use Infrastructure\Web\Controllers\Outbound\OutboundNotificationController;
use Infrastructure\Web\Controllers\Outbound\OutboundSmsController;
use Infrastructure\Web\Controllers\Outbound\OutboundWebhookController;
use Illuminate\Support\Facades\Route;

Route::prefix('outbound')->group(function () {
    Route::post('send', OutboundNotificationController::class);

    Route::post('sms/send', OutboundSmsController::class);

    Route::post('email/send', OutboundEmailController::class);

    Route::post('fcm/send', OutboundPushController::class);

    Route::post('webhook', OutboundWebhookController::class);
});
