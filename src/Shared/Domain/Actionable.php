<?php

namespace Shared\Domain;

use Domain\Contracts\ActionInterface;
use Ramsey\Uuid\Uuid;

abstract class Actionable implements ActionInterface
{
    public string $correlationId;

    public function __construct(string $identifier)
    {
        if ($identifier) {
            $this->correlationId = $identifier;
        }

        $this->correlationId = Uuid::uuid4()();
    }
}
