<?php

namespace Domain\Repositories;

use Domain\Entities\Notification;

interface NotificationRepositoryInterface
{
    public function allNotifications();

    public function getNotificationFromId(string $id);

    public function saveNotification(Notification $notification);

    public function updateNotification(Notification $notification);

    public function deleteNotification(Notification $notification);
}
