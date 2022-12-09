<?php

declare(strict_types=1);

namespace Domain\Entities;

class Device
{
    public string $deviceToken;

    public \DateTimeInterface $lastLoggedAt;
}
