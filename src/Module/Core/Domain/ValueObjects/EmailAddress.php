<?php

declare(strict_types=1);

namespace Domain\ValueObjects;

class EmailAddress
{
    private string $value;

    public function __construct(string $emailAddress)
    {
        if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(
                sprintf('<%s> invalid email address.', $emailAddress)
            );
        }

        $this->value = $emailAddress;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}
