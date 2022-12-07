<?php

namespace App\Notifications;

use App\Adapters\FcmAdapter;
use App\Services\Contracts\NotificationInterface;

class PushNotification implements NotificationInterface
{
    private FcmAdapter $provider;

    public function __construct(FcmAdapter $fcmAdapter)
    {
        $this->provider = $fcmAdapter;
    }

    public function send(): mixed
    {
        return $this->provider->toFCM();
    }
}
