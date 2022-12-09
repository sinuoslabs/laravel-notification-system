<?php

namespace Infrastructure\Providers\Push;

use Domain\Contracts\NotificationInterface;
use Domain\Entities\Message;

class FcmProvider implements NotificationInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
