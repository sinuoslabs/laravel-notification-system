<?php

declare(strict_types=1);

namespace Domain\Ports;

interface NotificationPort
{
    public function send(MessagePort $message);
}
