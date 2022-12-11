<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Application\Abstracts\OutboundNotificationData;
use Application\Contracts\Outbound\OutboundEmailOutboundActionInterface;
use Spatie\QueueableAction\QueueableAction;

class OutboundEmailAction implements OutboundEmailOutboundActionInterface
{
    use QueueableAction;

    public function __construct()
    {
        //
    }

    public function execute(OutboundNotificationData $data)
    {
        // TODO: Implement execute() method.
    }

    public function backoff(): array
    {
        return [2, 5, 10, 15, 30];
    }
}
