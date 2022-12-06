<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Controllers\Controller;
use App\Http\Requests\Outbound\FcmRequest;
use App\Jobs\Outbound\ProcessFcmNotification;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FcmNotificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param FcmRequest $request
     * @return Response
     */
    public function __invoke(FcmRequest $request)
    {
        //
        ProcessFcmNotification::dispatch()->onQueue('fcm');
    }
}
