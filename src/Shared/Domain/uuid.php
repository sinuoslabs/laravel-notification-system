<?php

namespace Shared\Domain;

abstract class uuid
{
    private string $value;

    public function __construct(string $id)
    {
        if (!\Ramsey\Uuid\Uuid::isValid($id)) {
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the id <%s>.', static::class, $id)
            );
        }
        $this->value = $id;
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
