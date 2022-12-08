<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Requests\Outbound\FcmRequest;

class WebhookNotificationController
{
    /**
     * Handle the incoming request.
     *
     * @param FcmRequest $request
     */
    public function __invoke(FcmRequest $request)
    {
        //
    }
}
