<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Infrastructure\Web\Controllers\Settings\GetAllSettingsController;
use Infrastructure\Web\Controllers\Settings\CreateSettingsController;
use Infrastructure\Web\Controllers\Settings\UpdateSettingsController;

Route::prefix('settings')->group(function () {
    Route::get('/', GetAllSettingsController::class);

    Route::post('create', CreateSettingsController::class);

    Route::put('{id}/update', UpdateSettingsController::class);
});
