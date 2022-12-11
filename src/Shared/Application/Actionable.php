<?php

declare(strict_types=1);

namespace Shared\Application;

use Spatie\QueueableAction\QueueableAction;

abstract class Actionable
{
    use QueueableAction;

    public string $correlationId;

    public function backoff(): array
    {
        return [2, 5, 10, 15, 30];
    }
}
