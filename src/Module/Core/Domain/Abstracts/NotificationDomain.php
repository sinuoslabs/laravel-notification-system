<?php

declare(strict_types=1);

namespace Domain\Abstracts;

abstract class NotificationDomain
{
    public abstract function send(MessageDomain $message);
}
