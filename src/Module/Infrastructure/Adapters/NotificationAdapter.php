<?php

namespace Infrastructure\Adapters;

use Domain\Contracts\NotificationInterface;
use Domain\Entities\Message;

class NotificationAdapter
{
    private NotificationInterface $notification;

    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function execute(Message $message): void
    {
        $this->notification->send($message);
    }
}
