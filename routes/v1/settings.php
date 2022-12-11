<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Infrastructure\Web\Controllers\Settings\UpdateSettingsController;

Route::prefix('settings')->group(function () {
    Route::put('{id}/update', UpdateSettingsController::class);
});
