<?php

declare(strict_types=1);

namespace Infrastructure\Gateways\Push;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class ApnsProvider implements NotificationProviderInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
