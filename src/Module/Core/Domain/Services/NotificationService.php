<?php

declare(strict_types=1);

namespace Domain\Services;

use Domain\Abstracts\MessageDomain;
use Domain\Abstracts\NotificationDomain;

class NotificationService
{
    public function __construct(public NotificationDomain $notification)
    {
    }

    public function sendEmailNotification(MessageDomain $message)
    {
        return $this->notification->send($message);
    }

    public function sendSmsNotification(MessageDomain $message)
    {
        return $this->notification->send($message);
    }

    public function sendPushNotification(MessageDomain $message)
    {
        return $this->notification->send($message);
    }

    public function sendInAppNotification(MessageDomain $message)
    {
        return $this->notification->send($message);
    }
}
