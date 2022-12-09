<?php

namespace Domain;

enum Channel: string
{
    case EMAIL = 'EMAIL';
    case SMS = 'SMS';
    case PUSH_NOTIFICATION = 'PUSH_NOTIFICATION';
    case IN_APP_PUSH_NOTIFICATION = 'IN_APP_PUSH_NOTIFICATION';
    case WEBHOOK = 'WEBHOOK';
}
