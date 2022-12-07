<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Controllers\Controller;
use App\Http\Requests\Outbound\SmsRequest;
use App\Jobs\Outbound\ProcessSmsNotification;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SmsNotificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param SmsRequest $request
     * @return bool
     */
    public function __invoke(SmsRequest $request): bool
    {
        ProcessSmsNotification::dispatch()
            ->onQueue('sms')
            ->delay(5);

        return true;
    }
}
