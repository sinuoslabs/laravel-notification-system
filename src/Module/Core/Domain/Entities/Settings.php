<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\Enums\NotificationChannel;
use Shared\Domain\Entity;

class Settings extends Entity
{
    public string $userId;
    public NotificationChannel $channel;
    public bool $optIn = true;

    public function __construct()
    {
        parent::__construct();
    }

    public static function create(array $data): Settings
    {
        $settings = new self();

        $settings
            ->setUserId($data['userId'])
            ->setChannel(
                NotificationChannel::from($data['channel'])
            )
            ->setOptIn($data['optIn'] ?? $settings->isOptIn());

        return $settings;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId): Settings
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return NotificationChannel
     */
    public function getChannel(): NotificationChannel
    {
        return $this->channel;
    }

    /**
     * @param NotificationChannel $channel
     * @return Settings
     */
    public function setChannel(NotificationChannel $channel): Settings
    {
        $this->channel = $channel;

        return $this;
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
    public function setOptIn(bool $optIn): Settings
    {
        $this->optIn = $optIn;

        return $this;
    }
}
