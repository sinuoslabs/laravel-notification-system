<?php

namespace Domain\Contracts;

use Domain\Entities\Message;

interface NotificationInterface
{
    public function send(Message $message);
}
