<?php

namespace Infrastructure\Providers\Sms;

use Domain\Contracts\NotificationInterface;
use Domain\Entities\Message;

class TwilioProvider implements NotificationInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
