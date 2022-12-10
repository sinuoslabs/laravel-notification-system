<?php

declare(strict_types=1);

namespace Domain\Contracts;

use Domain\Entities\Notification;

interface NotificationProviderInterface
{
    public function send(Notification $notification);
}
