<?php

namespace Infrastructure\Adapters;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class NotificationAdapter
{
    private NotificationProviderInterface $notification;

    public function __construct(NotificationProviderInterface $notification)
    {
        $this->notification = $notification;
    }

    public function execute(Message $message): void
    {
        $this->notification->send($message);
    }
}
