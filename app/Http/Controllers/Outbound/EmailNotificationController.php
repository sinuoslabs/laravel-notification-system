<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Requests\Outbound\EmailRequest;
use Illuminate\Http\Response;

class EmailNotificationController
{
    /**
     * Handle the incoming request.
     *
     * @param EmailRequest $request
     * @return Response
     */
    public function __invoke(EmailRequest $request)
    {
        //
    }
}
