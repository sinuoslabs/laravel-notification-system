<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Application\Abstracts\OutboundNotificationData;
use Application\Contracts\Outbound\OutboundPushOutboundActionInterface;
use Spatie\QueueableAction\QueueableAction;

class OutboundPushAction implements OutboundPushOutboundActionInterface
{
    use QueueableAction;

    public function __construct()
    {
        //
    }

    public function execute(OutboundNotificationData $data)
    {
        //
    }

    public function backoff(): array
    {
        return [2, 5, 10, 15, 30];
    }
}
