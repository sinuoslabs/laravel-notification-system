<?php

declare(strict_types=1);

namespace Domain\Enums;

enum NotificationType: string
{
    case TRANSACTIONAL = 'TRANSACTIONAL';
    case ALERT = 'ALERT';
    case PROMOTIONAL = 'PROMOTIONAL';
}
