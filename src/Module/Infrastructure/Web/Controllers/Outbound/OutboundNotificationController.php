<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use Application\Contracts\Outbound\OutboundEmailOutboundActionInterface;
use Application\Contracts\Outbound\OutboundPushOutboundActionInterface;
use Application\Contracts\Outbound\OutboundSmsOutboundActionInterface;
use Application\Contracts\Outbound\OutboundWebhookOutboundActionInterface;
use Illuminate\Http\Request;

class OutboundNotificationController
{
    private OutboundEmailOutboundActionInterface $emailAction;
    private OutboundSmsOutboundActionInterface $smsAction;
    private OutboundPushOutboundActionInterface $pushAction;
    private OutboundWebhookOutboundActionInterface $webhookAction;

    public function __construct(
        OutboundEmailOutboundActionInterface   $emailAction,
        OutboundSmsOutboundActionInterface     $smsAction,
        OutboundPushOutboundActionInterface    $pushAction,
        OutboundWebhookOutboundActionInterface $webhookAction
    ) {
        $this->emailAction = $emailAction;
        $this->smsAction = $smsAction;
        $this->pushAction = $pushAction;
        $this->webhookAction = $webhookAction;
    }

    public function __invoke(Request $request)
    {
        return $this->action->execute();
    }
}
