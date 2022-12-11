<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\WebhookRequest;
use Application\DTO\WebHookDto;
use Domain\Actions\Outbound\OutboundWebhookActionInterface;
use Domain\Enums\NotificationChannel;

class OutboundWebhookController
{
    private OutboundWebhookActionInterface $webhookAction;

    public function __construct(OutboundWebhookActionInterface $webhookAction)
    {
        $this->webhookAction = $webhookAction;
    }

    public function __invoke(WebhookRequest $request)
    {
        $body = WebHookDto::fromRequest($request);

        $this->webhookAction
            ->onQueue(NotificationChannel::WEBHOOK->value)
            ->execute($body);

        return response()
            ->json($body->toArray(), 200);
    }
}
