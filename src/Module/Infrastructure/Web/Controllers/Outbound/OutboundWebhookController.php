<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\WebhookRequest;
use Application\Contracts\Outbound\OutboundWebhookOutboundActionInterface;
use Application\Factories\OutboundNotificationDataFactory;
use Domain\Enums\NotificationChannel;

class OutboundWebhookController
{
    private OutboundWebhookOutboundActionInterface $webhookAction;

    public function __construct(OutboundWebhookOutboundActionInterface $webhookAction)
    {
        $this->webhookAction = $webhookAction;
    }

    public function __invoke(WebhookRequest $request)
    {
        $channel = NotificationChannel::WEBHOOK->value;
        $body = OutboundNotificationDataFactory::fromRequest($request, $channel, now());

        $this->webhookAction
            ->onQueue($channel)
            ->execute($body);

        return response()
            ->json($body->toArray(), 200);
    }
}
