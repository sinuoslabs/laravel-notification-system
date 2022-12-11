<?php

declare(strict_types=1);

namespace Domain\Enums;

enum NotificationStatus: string
{
    case PENDING = 'pending';
    case PROCESSING = 'processing';
    case FAILED = 'failed';
    case SENT = 'sent';
}
