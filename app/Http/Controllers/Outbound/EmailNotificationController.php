<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Controllers\Controller;
use App\Http\Requests\Outbound\EmailRequest;
use App\Jobs\Outbound\ProcessEmailNotification;
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
    public function __invoke(EmailRequest $request): mixed
    {
        $user = Cache::get('user', function () use ($request) {
            User::find($request->get('user_id'));
        });

        ProcessEmailNotification::dispatch($user, $request)->onQueue('emails');

        return '';
    }
}
