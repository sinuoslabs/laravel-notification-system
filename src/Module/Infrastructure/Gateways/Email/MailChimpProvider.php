<?php

declare(strict_types=1);

namespace Infrastructure\Gateways\Email;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class MailChimpProvider implements NotificationProviderInterface
{
    public function send(Message|\Domain\Entities\Notification $message)
    {
        // TODO: Implement send() method.
    }
}
