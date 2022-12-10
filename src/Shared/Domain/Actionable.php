<?php

namespace Shared\Domain;

use Ramsey\Uuid\Uuid;

abstract class Actionable
{
    public string $correlationId;

    public function __construct(?Identifier $identifier)
    {
        if ($identifier) {
            $this->correlationId = $identifier;
        }

        $this->correlationId = Uuid::uuid4()();
    }
}
