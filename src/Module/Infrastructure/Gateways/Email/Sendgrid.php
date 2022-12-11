<?php

declare(strict_types=1);

namespace Infrastructure\Gateways\Email;

use Domain\Abstracts\NotificationDomain;
use Domain\ValueObjects\Message;

class Sendgrid implements NotificationDomain
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
