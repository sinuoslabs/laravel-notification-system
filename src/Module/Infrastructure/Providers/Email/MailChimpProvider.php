<?php

namespace Infrastructure\Providers\Email;

use Domain\Contracts\NotificationInterface;
use Domain\Entities\Message;

class MailChimpProvider implements NotificationInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
