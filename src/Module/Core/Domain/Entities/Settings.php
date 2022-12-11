<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\Enums\Channel;
use Shared\Domain\Entity;

class Settings extends Entity
{
    public User $user;

    public Channel $channel;

    public bool $optIn = false;

    public function __construct(User $user, Channel $channel, bool $optIn)
    {
        $this->user = $user;
        $this->channel = $channel;
        $this->optIn = $optIn;

        parent::__construct();
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getChannel(): Channel
    {
        return $this->channel;
    }

    public function setChannel(Channel $channel): void
    {
        $this->channel = $channel;
    }

    public function isOptIn(): bool
    {
        return $this->optIn;
    }

    public function setOptIn(bool $optIn): void
    {
        $this->optIn = $optIn;
    }
}
