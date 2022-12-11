<?php

namespace Shared\Application;

use Domain\Contracts\ActionInterface;
use Spatie\QueueableAction\QueueableAction;

abstract class Actionable implements ActionInterface
{
    use QueueableAction;

    public string $correlationId;

    public function backoff(): array
    {
        return [2, 5, 10, 15, 30];
    }
}
