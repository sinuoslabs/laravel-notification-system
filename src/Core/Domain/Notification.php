<?php

namespace LNS\Core\Domain;

use LNS\Core\Domain\ValueObjects\NotificationId;

class Notification
{
    public NotificationId $id;

    public string $subject;

    public string $content;

    /**
     * @param NotificationId $id
     * @param string $subject
     * @param string $content
     */
    public function __construct(NotificationId $id, string $subject, string $content)
    {
        $this->id = $id;
        $this->subject = $subject;
        $this->content = $content;
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
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}
