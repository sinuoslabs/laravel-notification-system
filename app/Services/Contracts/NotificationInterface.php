<?php

namespace App\Services\Contracts;

interface NotificationInterface
{
    public function send(): mixed;
}
