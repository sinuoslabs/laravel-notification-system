<?php

namespace Domain\Services;

use Domain\Contracts\NotificationInterface;

class NotificationService
{
    public NotificationInterface $notification;

    /**
     * @param NotificationInterface $notification
     */
    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function creatNotification()
    {
        //
    }
}
