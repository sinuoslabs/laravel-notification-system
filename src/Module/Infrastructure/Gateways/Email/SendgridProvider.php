<?php

declare(strict_types=1);

namespace Infrastructure\Gateways\Email;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class SendgridProvider implements NotificationProviderInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
