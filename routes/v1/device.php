<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Infrastructure\Web\Controllers\Device\CreateDeviceTokenController;
use Infrastructure\Web\Controllers\Device\UpdateDeviceTokenController;

Route::prefix('devices')->group(function () {
    //Route::get('token/{device}', OutboundEmailController::class);

    Route::post('token/create', CreateDeviceTokenController::class);

    Route::put('token/{device}/update', UpdateDeviceTokenController::class);
});
