<?php

declare(strict_types=1);

namespace Domain\Entities;

use Shared\Domain\Entity;

class Device extends Entity
{
    public string $deviceToken;

    public \DateTimeInterface $lastLoggedAt;
}
