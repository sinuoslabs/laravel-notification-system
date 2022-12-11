<?php

declare(strict_types=1);

namespace Domain\Enums;

enum NotificationChannel: string
{
    case EMAIL = 'email';
    case SMS = 'sms';
    case PUSH = 'push';
    case IN_APP = 'in_app';
    case WEBHOOK = 'webhook';
}
