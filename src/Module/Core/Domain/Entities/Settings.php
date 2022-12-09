<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\Channel;

class Settings
{
    public Channel $channel;

    public bool $optIn;
}
