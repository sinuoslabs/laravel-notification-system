<?php

namespace App\Notifications;

use App\Channels\FcmProvider;
use App\Services\Contracts\NotificationInterface;

class PushNotification implements NotificationInterface
{
    private FcmProvider $provider;

    public function __construct(FcmProvider $provider)
    {
        $this->provider = $provider;
    }

    public function send()
    {
        $body = $this->provider->getBody();
    }
}
