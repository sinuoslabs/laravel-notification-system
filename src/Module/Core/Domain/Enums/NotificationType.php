<?php

namespace Domain\Enums;

enum NotificationType: string
{
    case TRANSACTIONAL = 'TRANSACTIONAL';
    case ALERT = 'ALERT';
}
