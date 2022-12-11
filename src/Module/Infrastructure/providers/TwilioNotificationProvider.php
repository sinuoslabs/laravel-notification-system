<?php

declare(strict_types=1);

namespace Infrastructure\providers;

use Domain\Abstracts\MessageDomain;
use Domain\Abstracts\NotificationDomain;

class TwilioNotificationProvider extends NotificationDomain
{
    public function __construct()
    {
    }

    public function send(MessageDomain $message)
    {
        // TODO: Implement send() method.
    }
}
