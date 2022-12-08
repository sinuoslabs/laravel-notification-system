<?php

declare(strict_types=1);

use App\Http\Controllers\Inbound\WebhookNotificationController;
use Illuminate\Support\Facades\Route;

Route::prefix('inbound')->group(function () {
    Route::post('webhook', WebhookNotificationController::class);
});
