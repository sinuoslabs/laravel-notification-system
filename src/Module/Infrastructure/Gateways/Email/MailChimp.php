<?php

declare(strict_types=1);

namespace Infrastructure\Gateways\Email;

use Domain\Abstracts\NotificationDomain;
use Domain\ValueObjects\Message;

class MailChimp implements NotificationDomain
{
    public function send(Message|\Domain\Entities\Notification $message)
    {
        // TODO: Implement send() method.
    }
}
