<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\WebhookRequest;
use Application\Abstracts\Actionable;
use Application\Factories\NotificationDataFactory;
use Domain\Enums\NotificationChannel;
use Illuminate\Http\JsonResponse;

class OutboundWebhookController
{
    public function __construct(private readonly Actionable $actionable)
    {
        //
    }

    public function __invoke(WebhookRequest $request): JsonResponse
    {
        $channel = NotificationChannel::WEBHOOK->value;
        $body = NotificationDataFactory::fromRequest($request, $channel, now());

        $this->actionable
            ->onQueue($channel)
            ->execute($body);

        return response()
            ->json($body->toArray(), 200);
    }
}
