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

    /**
     * Notification controller
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param array $data
     * @return Notification
     */
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

    /**
     * @return DateTimeInterface
     */
    public function getProcessingAt(): DateTimeInterface
    {
        return $this->processingAt;
    }

    /**
     * @param DateTimeInterface $processingAt
     * @return Notification
     */
    public function setProcessingAt(DateTimeInterface $processingAt): Notification
    {
        $this->processingAt = $processingAt;

        return $this;
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
     * @return Notification
     */
    public function setUserId(string $userId): Notification
    {
        $this->userId = $userId;

        return $this;
    }


    /**
     * @return array
     */
    public function getPayload(): array
    {
        return $this->payload;
    }

    /**
     * @param array $payload
     * @return Notification
     */
    public function setPayload(array $payload): Notification
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * @return NotificationStatus
     */
    public function getNotificationStatus(): NotificationStatus
    {
        return $this->notificationStatus;
    }

    /**
     * @param NotificationStatus $notificationStatus
     * @return Notification
     */
    public function setNotificationStatus(NotificationStatus $notificationStatus): Notification
    {
        $this->notificationStatus = $notificationStatus;

        return $this;
    }

    /**
     * @return NotificationType
     */
    public function getNotificationType(): NotificationType
    {
        return $this->notificationType;
    }

    /**
     * @param NotificationType $notificationType
     * @return Notification
     */
    public function setNotificationType(NotificationType $notificationType): Notification
    {
        $this->notificationType = $notificationType;

        return $this;
    }

    /**
     * @return NotificationChannel
     */
    public function getNotificationChannel(): NotificationChannel
    {
        return $this->notificationChannel;
    }

    /**
     * @param NotificationChannel $notificationChannel
     * @return Notification
     */
    public function setNotificationChannel(NotificationChannel $notificationChannel): Notification
    {
        $this->notificationChannel = $notificationChannel;

        return $this;
    }
}
