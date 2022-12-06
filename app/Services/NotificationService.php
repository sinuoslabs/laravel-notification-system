<?php

namespace App\Services;

use App\Services\Contracts\NotificationInterface;

class NotificationService
{
    public static function send(NotificationInterface $notification)
    {
        return $notification->send();
    }
}
