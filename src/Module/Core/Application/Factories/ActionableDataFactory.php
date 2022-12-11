<?php

namespace Application\Factories;

use App\Http\Requests\Outbound\WebhookRequest;
use Application\Abstracts\ActionableData;

class ActionableDataFactory extends ActionableData
{
    public function __construct(
        public readonly string $userId,
        public readonly string $notificationStatus,
        public readonly string $notificationType,
        public readonly string $notificationChannel,
        public readonly \DateTimeInterface $processingAt,
        public readonly array  $payload,
    ) {
    }

    public static function fromRequest(WebhookRequest $request, string $channel, ?\DateTimeInterface $processingAt): static
    {
        return new self(
            userId: $request->get('userId'),
            notificationStatus: 'processing',
            notificationType: $request->get('notificationType'),
            notificationChannel: $channel,
            processingAt: $processingAt,
            payload: $request->get('payload'),
        );
    }

    public function toArray(): array
    {
        return (array) $this;
    }
}
