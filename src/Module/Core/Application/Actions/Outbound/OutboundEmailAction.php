<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Domain\Actions\Outbound\OutboundEmailActionInterface;
use Spatie\QueueableAction\QueueableAction;

class OutboundEmailAction implements OutboundEmailActionInterface
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
