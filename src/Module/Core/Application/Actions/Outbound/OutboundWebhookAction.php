<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Application\Abstracts\Actionable;
use Application\Abstracts\ActionableData;
use Domain\Contracts\UnitOfWorkInterface;
use Domain\Entities\Notification;
use Domain\Repositories\NotificationRepositoryInterface;

class OutboundWebhookAction extends Actionable
{
    private NotificationRepositoryInterface $notificationRepository;

    public function __construct(UnitOfWorkInterface $unitOfWork, NotificationRepositoryInterface $notificationRepository)
    {
        parent::__construct($unitOfWork);

        $this->notificationRepository = $notificationRepository;
    }

    public function prepare(ActionableData $data)
    {
        $notification = Notification::create($data->toArray());

        $this->notificationRepository->saveNotification($notification);
    }
}
