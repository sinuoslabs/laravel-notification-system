<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\WebhookRequest;
use Domain\Actions\Outbound\OutboundWebhookActionInterface;
use Domain\Enums\Channel;

class OutboundWebhookController
{
    private OutboundWebhookActionInterface $webhookAction;

    public function __construct(OutboundWebhookActionInterface $webhookAction)
    {
        $this->webhookAction = $webhookAction;
    }

    public function __invoke(WebhookRequest $request)
    {
        $body = $request->all();

        $this->webhookAction
            ->onQueue(Channel::WEBHOOK->value)
            ->execute();

        return $body;
    }
}
