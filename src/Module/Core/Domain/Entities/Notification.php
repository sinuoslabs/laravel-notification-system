<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\ValueObjects\NotificationId;

class Notification
{
    public NotificationId $id;

    public string $subject;

    public string $content;
}
