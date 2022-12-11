<?php

declare(strict_types=1);

namespace Infrastructure\Persistences\Eloquent\Repositories;

use Domain\Entities\Notification;
use Domain\Repositories\NotificationRepositoryInterface;

class EloquentNotificationRepository implements NotificationRepositoryInterface
{
    public function allNotifications()
    {
        // TODO: Implement allNotifications() method.
    }

    public function getNotificationFromId(string $id)
    {
        // TODO: Implement getNotificationFromId() method.
    }

    public function saveNotification(Notification $notification)
    {
        // TODO: Implement saveNotification() method.
    }

    public function updateNotification(Notification $notification)
    {
        // TODO: Implement updateNotification() method.
    }

    public function deleteNotification(Notification $notification)
    {
        // TODO: Implement deleteNotification() method.
    }
}
