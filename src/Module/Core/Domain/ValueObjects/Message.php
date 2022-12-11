<?php

declare(strict_types=1);

namespace Domain\ValueObjects;

class Message
{
    public string $body;

    public function __construct(string $body, public ?string $subject = null)
    {
        if ($body === '') {
            throw new \InvalidArgumentException('Body cannot be empty.');
        }
        $this->body = $body;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function __toString(): string
    {
        return $this->getBody();
    }
}
