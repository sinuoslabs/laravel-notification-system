<?php

namespace Application\DTO;

use Domain\Enums\NotificationStatus;
use Domain\Enums\NotificationType;

class WebHookDto
{
    public readonly string $userId;

    public readonly NotificationStatus $status;

    public readonly NotificationType $notificationType;

    public readonly string $channel;

    public readonly array $payload;

    public function fromRequest(Request $request)
    {
        //
    }
}
