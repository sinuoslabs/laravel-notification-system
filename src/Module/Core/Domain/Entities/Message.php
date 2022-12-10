<?php

declare(strict_types=1);

namespace Domain\Entities;

use Shared\Domain\Entity;

class Message extends Entity
{
    public ?string $subject;

    public string $body;

    /**
     * @param string|null $subject
     * @param string $body
     */
    public function __construct(?string $subject, string $body)
    {
        $this->subject = $subject;
        $this->body = $body;

        parent::__construct();
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     */
    public function setSubject(?string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }
}
