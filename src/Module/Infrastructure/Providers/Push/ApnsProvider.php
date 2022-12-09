<?php

namespace Infrastructure\Providers\Push;

use Domain\Contracts\NotificationInterface;
use Domain\Entities\Message;

class ApnsProvider implements NotificationInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
