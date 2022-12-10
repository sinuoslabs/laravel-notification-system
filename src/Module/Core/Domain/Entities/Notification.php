<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\ValueObjects\NotificationId;

class Notification
{
    public NotificationId $id;

    public User $from;

    public User $to;

    public Message $message;

    /**
     * @param NotificationId $id
     * @param User $from
     * @param User $to
     * @param Message $message
     */
    public function __construct(NotificationId $id, User $from, User $to, Message $message)
    {
        $this->id = $id;
        $this->from = $from;
        $this->to = $to;
        $this->message = $message;
    }

    /**
     * @return NotificationId
     */
    public function getId(): NotificationId
    {
        return $this->id;
    }

    /**
     * @param NotificationId $id
     */
    public function setId(NotificationId $id): void
    {
        $this->id = $id;
    }

    /**
     * @return User
     */
    public function getFrom(): User
    {
        return $this->from;
    }

    /**
     * @param User $from
     */
    public function setFrom(User $from): void
    {
        $this->from = $from;
    }

    /**
     * @return User
     */
    public function getTo(): User
    {
        return $this->to;
    }

    /**
     * @param User $to
     */
    public function setTo(User $to): void
    {
        $this->to = $to;
    }

    /**
     * @return Message
     */
    public function getMessage(): Message
    {
        return $this->message;
    }

    /**
     * @param Message $message
     */
    public function setMessage(Message $message): void
    {
        $this->message = $message;
    }
}
