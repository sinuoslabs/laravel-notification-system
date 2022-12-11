<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use Domain\Actions\Outbound\OutboundEmailActionInterface;
use Domain\Actions\Outbound\OutboundPushActionInterface;
use Domain\Actions\Outbound\OutboundSmsActionInterface;
use Domain\Actions\Outbound\OutboundWebhookActionInterface;
use Illuminate\Http\Request;

class OutboundNotificationController
{
    private OutboundEmailActionInterface $emailAction;
    private OutboundSmsActionInterface $smsAction;
    private OutboundPushActionInterface $pushAction;
    private OutboundWebhookActionInterface $webhookAction;

    public function __construct(
        OutboundEmailActionInterface $emailAction,
        OutboundSmsActionInterface $smsAction,
        OutboundPushActionInterface $pushAction,
        OutboundWebhookActionInterface $webhookAction
    )
    {
        $this->emailAction = $emailAction;
        $this->smsAction = $smsAction;
        $this->pushAction = $pushAction;
        $this->webhookAction = $webhookAction;
    }

    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     */
    public function __invoke(Request $request)
    {
        return $this->action->execute();
    }
}
