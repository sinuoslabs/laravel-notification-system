<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\ValueObjects\MessageId;

class Message
{
    public MessageId $messageId;

    public ?string $title;

    public string $body;

    /**
     * @param MessageId $messageId
     * @param string|null $title
     * @param string $body
     */
    public function __construct(MessageId $messageId, ?string $title, string $body)
    {
        $this->messageId = $messageId;
        $this->title = $title;
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
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
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
