<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\Enums\Channel;
use Shared\Domain\Entity;

class Settings extends Entity
{
    public Channel $channel;

    public bool $optIn = false;
}
