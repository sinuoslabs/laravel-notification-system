<?php

declare(strict_types=1);

use App\Http\Controllers\Inbound\WebhookController;
use Illuminate\Support\Facades\Route;

Route::prefix('inbound')->group(function () {
    Route::post('webhook', WebhookController::class);
});
