<?php

namespace Infrastructure\Providers\Email;

use Domain\Contracts\NotificationInterface;
use Domain\Entities\Message;

class NexmoProvider implements NotificationInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
