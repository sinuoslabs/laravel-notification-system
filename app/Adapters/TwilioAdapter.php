<?php

namespace App\Adapters;

use App\Adapters\Concerns\TwilioMessageTrait;

class TwilioAdapter
{
    use TwilioMessageTrait;

    public function toTwilio(): bool|string
    {
        return json_encode([
            'recipient' => $this->getRecipient(),
            'message' => $this->getMessage(),
        ]);
    }
}
