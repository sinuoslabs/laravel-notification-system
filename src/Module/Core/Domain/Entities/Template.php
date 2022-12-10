<?php

declare(strict_types=1);

namespace Domain\Entities;

use Shared\Domain\Entity;

class Template extends Entity
{
    public string $name;

    public array $content = [];
}
