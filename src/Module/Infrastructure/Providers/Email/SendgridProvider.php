<?php

namespace Infrastructure\Providers\Email;

use Domain\Contracts\NotificationProviderInterface;
use Domain\Entities\Message;

class SendgridProvider implements NotificationProviderInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
