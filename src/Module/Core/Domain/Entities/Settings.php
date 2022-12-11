<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\Enums\NotificationChannel;
use Shared\Domain\Entity;

class Settings extends Entity
{
    public User $user;

    public NotificationChannel $channel;

    public bool $optIn = false;

    public function __construct(User $user, NotificationChannel $channel, bool $optIn)
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

    public function getChannel(): NotificationChannel
    {
        return $this->channel;
    }

    public function setChannel(NotificationChannel $channel): void
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
