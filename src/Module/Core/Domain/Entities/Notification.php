<?php

declare(strict_types=1);

namespace Domain\Entities;

use DateTimeInterface;
use Domain\Enums\NotificationChannel;
use Domain\Enums\NotificationStatus;
use Domain\Enums\NotificationType;
use Shared\Domain\Entity;

class Notification extends Entity
{
    private string $userId;

    private array $payload;

    private NotificationStatus $notificationStatus;

    private NotificationType $notificationType;

    private NotificationChannel $notificationChannel;

    private DateTimeInterface $processingAt;

    public function __construct()
    {
        parent::__construct();
    }

    public static function create(array $data): Notification
    {
        $notification = new self();

        $notification->setNotificationChannel(NotificationChannel::from($data['notificationChannel']))
            ->setNotificationType(NotificationType::from($data['notificationType']))
            ->setNotificationStatus(NotificationStatus::from($data['notificationStatus']))
            ->setProcessingAt($data['processingAt'])
            ->setUserId($data['userId'])
            ->setPayload($data['payload']);

        return $notification;
    }

    public function getProcessingAt(): DateTimeInterface
    {
        return $this->processingAt;
    }

    public function setProcessingAt(DateTimeInterface $processingAt): Notification
    {
        $this->processingAt = $processingAt;

        return $this;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): Notification
    {
        $this->userId = $userId;

        return $this;
    }


    public function getPayload(): array
    {
        return $this->payload;
    }

    public function setPayload(array $payload): Notification
    {
        $this->payload = $payload;

        return $this;
    }

    public function getNotificationStatus(): NotificationStatus
    {
        return $this->notificationStatus;
    }

    public function setNotificationStatus(NotificationStatus $notificationStatus): Notification
    {
        $this->notificationStatus = $notificationStatus;

        return $this;
    }

    public function getNotificationType(): NotificationType
    {
        return $this->notificationType;
    }

    public function setNotificationType(NotificationType $notificationType): Notification
    {
        $this->notificationType = $notificationType;

        return $this;
    }

    public function getNotificationChannel(): NotificationChannel
    {
        return $this->notificationChannel;
    }

    public function setNotificationChannel(NotificationChannel $notificationChannel): Notification
    {
        $this->notificationChannel = $notificationChannel;

        return $this;
    }
}
