<?php

declare(strict_types=1);

namespace Domain\Enums;

enum NotificationType: string
{
    case TRANSACTIONAL = 'transactional';
    case ALERT = 'alert';
    case PROMOTIONAL = 'promotional';
}
