<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use Illuminate\Http\Request;
use Shared\Application\Actionable;

class OutboundNotificationController
{
    public function __construct(
        private Actionable $emailAction,
        private Actionable $smsAction,
        private Actionable $pushAction,
        private Actionable $webhookAction
    )
    {}

    public function __invoke(Request $request)
    {
        return;
    }
}
