<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Domain\Entities\Notification;
use Domain\Messages\WebhookMessage;
use Domain\Ports\NotificationPort;
use Domain\Ports\UnitOfWorkPort;
use Domain\Repositories\NotificationRepositoryInterface;
use Shared\Application\Actionable;
use Shared\Application\Contracts\ActionableInput;

class OutboundWebhookAction extends Actionable
{
    /**
     * Outbound webhook action
     *
     * @param UnitOfWorkPort $unitOfWork
     * @param NotificationRepositoryInterface $notificationRepository
     * @param NotificationPort $notification
     */
    public function __construct(
        protected readonly UnitOfWorkPort                $unitOfWork,
        private readonly NotificationRepositoryInterface $notificationRepository,
        private readonly NotificationPort                $notification,
    )
    {
        parent::__construct($unitOfWork);
    }

    public function prepare(ActionableInput $data)
    {
        $notification = Notification::create($data->toArray());

        $this->notificationRepository->saveNotification($notification);

        $payload = (object) $notification->getPayload();

        $response = $this->notification->send(
            (new WebhookMessage())
                ->setUrl($payload->url)
                ->setHeader($payload->header ?? null)
                ->setBody($payload->body)
        );
    }
}
