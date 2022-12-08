<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\ValueObjects\MessageId;

class Message
{
    public MessageId $messageId;

    public ?string $subject;

    public string $body;

    /**
     * @param MessageId $messageId
     * @param string|null $subject
     * @param string $body
     */
    public function __construct(MessageId $messageId, ?string $subject, string $body)
    {
        $this->messageId = $messageId;
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * @return MessageId
     */
    public function getMessageId(): MessageId
    {
        return $this->messageId;
    }

    /**
     * @param MessageId $messageId
     */
    public function setMessageId(MessageId $messageId): void
    {
        $this->messageId = $messageId;
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
