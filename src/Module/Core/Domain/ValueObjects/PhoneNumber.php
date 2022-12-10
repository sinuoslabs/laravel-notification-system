<?php

namespace Domain\ValueObjects;

class PhoneNumber
{
    private string $value;

    public function __construct(string $phoneNumber)
    {
        $regex = '/^\+\d{1,3} \d{3} \d{3}-\d{4}$/';

        if (!preg_match($regex, $phoneNumber)) {
            throw new \InvalidArgumentException(
                sprintf('<%s> invalid phone number.', $phoneNumber)
            );
        }

        $this->value = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->getValue();
    }
}
