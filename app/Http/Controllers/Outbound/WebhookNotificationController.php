<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Controllers\Controller;
use App\Http\Requests\Outbound\FcmRequest;
use App\Jobs\Outbound\ProcessFcmNotification;
use Illuminate\Http\Response;

class WebhookNotificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param FcmRequest $request
     * @return bool
     */
    public function __invoke(FcmRequest $request): bool
    {
        ProcessFcmNotification::dispatch()
            ->onQueue('fcm')
            ->delay(5);

        return true;
    }
}
