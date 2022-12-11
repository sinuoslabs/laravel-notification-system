<?php

declare(strict_types=1);

use Infrastructure\Web\Controllers\Inbound\InboundWebhookController;
use Illuminate\Support\Facades\Route;

Route::prefix('inbound')->group(function () {
    Route::post('webhook', InboundWebhookController::class);
});
