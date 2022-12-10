<?php

namespace Infrastructure\Providers\Push;

use Domain\Contracts\NotificationProviderInterface;
use Domain\Entities\Message;

class FcmProvider implements NotificationProviderInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
