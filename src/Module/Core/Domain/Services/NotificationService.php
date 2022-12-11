<?php

declare(strict_types=1);

namespace Domain\Services;

use Domain\Contracts\NotificationProviderInterface;

class NotificationService
{
    public NotificationProviderInterface $notification;

    public function __construct(NotificationProviderInterface $notification)
    {
        $this->notification = $notification;
    }

    public function sendEmailNotification()
    {
        //
    }

    public function sendSmsNotification()
    {
        //
    }

    public function sendPushNotification()
    {
        //
    }

    public function sendInAppNotification()
    {
        //
    }
}
