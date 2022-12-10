<?php

declare(strict_types=1);

namespace Domain\Services;

use Domain\Contracts\NotificationProviderInterface;

class NotificationService
{
    public NotificationProviderInterface $notification;

    /**
     * @param NotificationProviderInterface $notification
     */
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
}
