<?php

declare(strict_types=1);

namespace Infrastructure\Gateways\Sms;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class TwilioProvider implements NotificationProviderInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}