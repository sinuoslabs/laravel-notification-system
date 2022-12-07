<?php

namespace App\Notifications;

use App\Adapters\TwilioAdapter;
use App\Services\Contracts\NotificationInterface;

class SmsNotification implements NotificationInterface
{
    private TwilioAdapter $twilioAdapter;

    public function __construct(TwilioAdapter $twilioAdapter)
    {
        $this->twilioAdapter = $twilioAdapter;
    }

    public function send(): mixed
    {
        return $this->twilioAdapter->toTwilio();
    }
}
