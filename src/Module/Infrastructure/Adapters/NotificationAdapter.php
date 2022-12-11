<?php

declare(strict_types=1);

namespace Infrastructure\Adapters;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class NotificationAdapter
{
    public function __construct(private NotificationProviderInterface $notification)
    {
    }

    public function execute(Message $message): void
    {
        $this->notification->send($message);
    }
}
