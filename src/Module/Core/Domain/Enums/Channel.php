<?php

namespace Domain\Enums;

enum Channel: string
{
    case EMAIL = 'EMAIL';
    case SMS = 'SMS';
    case PUSH = 'PUSH';
    case IN_APP = 'IN_APP';
    case WEBHOOK = 'WEBHOOK';
}
