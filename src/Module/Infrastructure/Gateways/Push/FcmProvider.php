<?php

declare(strict_types=1);

namespace Infrastructure\Providers\Push;

use Domain\Contracts\NotificationProviderInterface;
use Domain\ValueObjects\Message;

class FcmProvider implements NotificationProviderInterface
{
    public function send(Message $message)
    {
        // TODO: Implement send() method.
    }
}
