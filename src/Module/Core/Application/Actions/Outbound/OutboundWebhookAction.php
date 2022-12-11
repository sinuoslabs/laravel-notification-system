<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Application\Abstracts\Actionable;
use Application\Abstracts\ActionableData;
use Domain\Abstracts\NotificationDomain;
use Domain\Contracts\UnitOfWorkInterface;
use Domain\Entities\Notification;
use Domain\Messages\WebhookMessage;
use Domain\Repositories\NotificationRepositoryInterface;

class OutboundWebhookAction extends Actionable
{
    /**
     * Outbound webhook action
     *
     * @param UnitOfWorkInterface $unitOfWork
     * @param NotificationRepositoryInterface $notificationRepository
     * @param NotificationDomain $notification
     */
    public function __construct(
        protected readonly UnitOfWorkInterface           $unitOfWork,
        private readonly NotificationRepositoryInterface $notificationRepository,
        private readonly NotificationDomain        $notification,
    )
    {
        parent::__construct($unitOfWork);
    }

    public function prepare(ActionableData $data)
    {
        $notification = Notification::create($data->toArray());

        $this->notificationRepository->saveNotification($notification);

        $response = $this->notification->send(
            (new WebhookMessage())
                ->setUrl($notification->getPayload()['url'])
                ->setHeader($notification->getPayload()['header'] ?? null)
                ->setBody($notification->getPayload()['body'])
        );
    }
}
