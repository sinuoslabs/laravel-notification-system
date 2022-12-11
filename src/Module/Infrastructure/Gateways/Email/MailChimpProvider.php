<?php

declare(strict_types=1);

namespace Infrastructure\Providers\Email;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class MailChimpProvider implements NotificationProviderInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
