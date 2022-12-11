<?php

declare(strict_types=1);

namespace Domain\ValueObjects;

class Message
{
    public ?string $subject;

    public string $body;

    public function __construct(string $body, ?string $subject = null)
    {
        if ($body === '') {
            throw new \InvalidArgumentException('Body cannot be empty.');
        }

        $this->subject = $subject;
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
