<?php

declare(strict_types=1);

namespace Infrastructure\Persistences\Eloquent\Repositories;

use Domain\Entities\Notification;
use Domain\Repositories\NotificationRepositoryInterface;
use Infrastructure\Persistences\Eloquent\Models\NotificationModel;

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
        dd($notification);
        NotificationModel::create([
            'payload' => $notification->getPayload(),
            'user_id' => $notification->getUserId(),
            'notification_channel' => $notification->getNotificationChannel()->value,
            'notification_status' => $notification->getNotificationStatus()->value,
            'notification_type' => $notification->getNotificationType()->value,
        ]);
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
