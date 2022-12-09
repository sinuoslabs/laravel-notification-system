<?php

namespace Domain;

enum Channel: string
{
    case EMAIL = 'EMAIL';
    case SMS = 'SMS';
    case PUSH_NOTIFICATION = 'PUSH';
    case IN_APP_PUSH_NOTIFICATION = 'IN_APP';
    case WEBHOOK = 'WEBHOOK';
}
