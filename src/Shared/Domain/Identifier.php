<?php

declare(strict_types=1);

namespace Shared\Domain;

use Ramsey\Uuid\Uuid;

abstract class Identifier
{
    private string $value;

    public function __construct(string $id)
    {
        if (!Uuid::isValid($id)) {
            throw new \InvalidArgumentException(
                sprintf('<%s> does not allow the id <%s>.', static::class, $id)
            );
        }
        $this->value = $id;
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
