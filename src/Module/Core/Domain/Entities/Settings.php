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

    /**
     * @param User $user
     * @param Channel $channel
     * @param bool $optIn
     */
    public function __construct(User $user, Channel $channel, bool $optIn)
    {
        $this->user = $user;
        $this->channel = $channel;
        $this->optIn = $optIn;

        parent::__construct();
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return Channel
     */
    public function getChannel(): Channel
    {
        return $this->channel;
    }

    /**
     * @param Channel $channel
     */
    public function setChannel(Channel $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return bool
     */
    public function isOptIn(): bool
    {
        return $this->optIn;
    }

    /**
     * @param bool $optIn
     */
    public function setOptIn(bool $optIn): void
    {
        $this->optIn = $optIn;
    }
}
