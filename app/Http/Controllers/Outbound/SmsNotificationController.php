<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Requests\Outbound\SmsRequest;
use App\Jobs\Outbound\ProcessSmsNotification;

class SmsNotificationController
{
    /**
     * Handle the incoming request.
     *
     * @param SmsRequest $request
     */
    public function __invoke(SmsRequest $request)
    {
        //
    }
}
