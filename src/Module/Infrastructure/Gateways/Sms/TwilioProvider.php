<?php

namespace Infrastructure\Providers\Sms;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class TwilioProvider implements NotificationProviderInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
