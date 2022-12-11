<?php

declare(strict_types=1);

namespace Domain\Services;

use Domain\Contracts\NotificationProviderInterface;

class NotificationService
{
    public function __construct(public NotificationProviderInterface $notification)
    {
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
