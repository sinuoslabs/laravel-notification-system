<?php

declare(strict_types=1);

namespace Domain\Entities;

use Shared\Domain\Entity;

class Device extends Entity
{
    public User $user;

    public string $deviceToken;

    public \DateTimeInterface $lastLoggedAt;

    /**
     * @param User $user
     * @param string $deviceToken
     * @param \DateTimeInterface $lastLoggedAt
     */
    public function __construct(User $user, string $deviceToken, \DateTimeInterface $lastLoggedAt)
    {
        $this->user = $user;
        $this->deviceToken = $deviceToken;
        $this->lastLoggedAt = $lastLoggedAt;

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
     * @return string
     */
    public function getDeviceToken(): string
    {
        return $this->deviceToken;
    }

    /**
     * @param string $deviceToken
     */
    public function setDeviceToken(string $deviceToken): void
    {
        $this->deviceToken = $deviceToken;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastLoggedAt(): \DateTimeInterface
    {
        return $this->lastLoggedAt;
    }

    /**
     * @param \DateTimeInterface $lastLoggedAt
     */
    public function setLastLoggedAt(\DateTimeInterface $lastLoggedAt): void
    {
        $this->lastLoggedAt = $lastLoggedAt;
    }
}
