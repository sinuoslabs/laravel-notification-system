<?php

declare(strict_types=1);

namespace Infrastructure\Gateways\Sms;

use Domain\Abstracts\NotificationDomain;
use Domain\ValueObjects\Message;

class Twilio implements NotificationDomain
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
