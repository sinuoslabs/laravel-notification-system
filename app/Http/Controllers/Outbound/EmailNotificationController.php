<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Controllers\Controller;
use App\Http\Requests\Outbound\EmailRequest;
use App\Jobs\Outbound\ProcessEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

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
        $user = Cache::get('user', function () use ($request) {
            User::find($request->get('user_id'));
        });

        ProcessEmail::dispatch($user, $request)->onQueue('emails');
    }
}
