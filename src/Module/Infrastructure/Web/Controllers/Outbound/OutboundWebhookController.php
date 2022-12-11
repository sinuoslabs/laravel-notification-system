<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\WebhookRequest;
use Application\Abstracts\Actionable;
use Application\Factories\ActionableDataFactory;
use Domain\Enums\NotificationChannel;

class OutboundWebhookController
{
    public function __construct(private readonly Actionable $actionable)
    {
        //
    }

    public function __invoke(WebhookRequest $request): \Illuminate\Http\JsonResponse
    {
        $channel = NotificationChannel::WEBHOOK->value;
        $body = ActionableDataFactory::fromRequest($request, $channel, now());

        $this->actionable
            ->onQueue($channel)
            ->execute($body);

        return response()
            ->json($body->toArray(), 200);
    }
}
