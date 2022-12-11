<?php

namespace Application\DTO;

use App\Http\Requests\Outbound\WebhookRequest;
use Domain\Contracts\RequestTransformerInterface;
use Domain\Enums\NotificationChannel;
use Domain\Enums\NotificationStatus;
use Domain\Enums\NotificationType;

class WebHookDto implements RequestTransformerInterface
{
    public function __construct(
        public readonly string              $userId,
        public readonly NotificationStatus  $notificationStatus,
        public readonly NotificationType    $notificationType,
        public readonly NotificationChannel $notificationChannel,
        public readonly array $payload
    )
    {}

    public static function fromRequest(WebhookRequest $request): static
    {
        return new self(
            userId : $request->get('userId'),
            notificationStatus : NotificationStatus::PROCESSING,
            notificationType : NotificationType::from($request->get('notificationType')),
            notificationChannel : NotificationChannel::WEBHOOK,
            payload : $request->get('payload'),
        );
    }

    public function toArray(): array
    {
        return [
            'userId' => $this->userId,
            'notificationStatus' => $this->notificationStatus->value,
            'notificationType' => $this->notificationType->value,
            'notificationChannel' => $this->notificationChannel->value,
            'payload' => $this->payload,
        ];
    }
}
