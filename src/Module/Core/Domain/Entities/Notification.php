<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\ValueObjects\Message;
use Shared\Domain\Entity;

class Notification extends Entity
{
    public User $from;

    public User $to;

    public Message $message;

    public function __construct(User $from, User $to, Message $message)
    {
        $this->from = $from;
        $this->to = $to;
        $this->message = $message;

        parent::__construct();
    }

    public function getFrom(): User
    {
        return $this->from;
    }

    public function setFrom(User $from): void
    {
        $this->from = $from;
    }

    public function getTo(): User
    {
        return $this->to;
    }

    public function setTo(User $to): void
    {
        $this->to = $to;
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function setMessage(Message $message): void
    {
        $this->message = $message;
    }
}
