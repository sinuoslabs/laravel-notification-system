<?php

namespace Domain\ValueObjects;

class EmailAddress
{
    private string $value;

    public function __construct(string $emailAddress)
    {
        if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException(
                sprintf('<%s> does invalid email address <%s>.', static::class, $emailAddress)
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
