<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Application\Abstracts\OutboundNotificationData;
use Application\Contracts\Outbound\OutboundWebhookOutboundActionInterface;
use Domain\Entities\Notification;
use Domain\Repositories\NotificationRepositoryInterface;
use Spatie\QueueableAction\QueueableAction;

class OutboundWebhookAction implements OutboundWebhookOutboundActionInterface
{
    use QueueableAction;

    public function __construct(public readonly NotificationRepositoryInterface $notificationRepository)
    {
    }

    public function execute(OutboundNotificationData $data)
    {
        $notification = Notification::create($data->toArray());

        $this->notificationRepository->saveNotification($notification);
    }

    public function backoff(): array
    {
        return [2, 5, 10, 15, 30];
    }
}
