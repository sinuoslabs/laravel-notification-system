<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Requests\Outbound\FcmRequest;

class PushNotificationController
{
    /**
     * Handle the incoming request.
     *
     * @param FcmRequest $request
     * @return bool
     */
    public function __invoke(FcmRequest $request)
    {
        //
    }
}
