<?php

namespace Infrastructure\Providers\Push;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class ApnsProvider implements NotificationProviderInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
