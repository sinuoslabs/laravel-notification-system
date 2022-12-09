<?php

namespace Domain\Repositories;

use Domain\Entities\Message;

interface NotificationInterface
{
    public function send(Message $message);
}
