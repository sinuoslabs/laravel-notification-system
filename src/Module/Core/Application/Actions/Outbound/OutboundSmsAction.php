<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Domain\Actions\Outbound\OutboundSmsActionInterface;
use Spatie\QueueableAction\QueueableAction;

class OutboundSmsAction implements OutboundSmsActionInterface
{
    use QueueableAction;

    public function __construct()
    {
        //
    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }

    public function backoff(): array
    {
        return [2, 5, 10, 15, 30];
    }
}
