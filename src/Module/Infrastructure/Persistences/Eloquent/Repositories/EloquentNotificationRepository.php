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
        return NotificationModel::create([
            'id' => $notification->getId(),
            'payload' => $notification->getPayload(),
            'user_id' => $notification->getUserId(),
            'processing_at' => $notification->getProcessingAt(),
            'notification_channel' => $notification->getNotificationChannel(),
            'notification_status' => $notification->getNotificationStatus(),
            'notification_type' => $notification->getNotificationType(),
            'created_at' => $notification->getCreatedAt(),
            'updated_at' => $notification->getUpdatedAt(),
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
