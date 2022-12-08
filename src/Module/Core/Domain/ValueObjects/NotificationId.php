<?php

namespace LNS\Core\Domain\ValueObjects;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid;

class NotificationId
{
    private string $notificationId;

    public function __construct(string $id)
    {
        if (!Uuid::isValid($id)) {
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the id <%s>.', static::class, $id)
            );
        }
        $this->notificationId = $id;
    }

    /**
     * @return string
     */
    public function getNotificationId(): string
    {
        return $this->notificationId;
    }

    public function __toString(): string
    {
        return $this->getNotificationId();
    }
}
