<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Controllers\Controller;
use App\Http\Requests\Outbound\EmailRequest;
use App\Jobs\Outbound\ProcessEmail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmailNotificationController extends Controller
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
        ProcessEmail::dispatch()->onQueue('emails');
    }
}
