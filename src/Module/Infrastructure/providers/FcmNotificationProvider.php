<?php

declare(strict_types=1);

namespace Infrastructure\providers;

use Domain\Ports\MessagePort;
use Domain\Ports\NotificationPort;

class FcmNotificationProvider implements NotificationPort
{
    public function __construct()
    {
    }

    public function send(MessagePort $message)
    {
        // TODO: Implement send() method.
    }
}
