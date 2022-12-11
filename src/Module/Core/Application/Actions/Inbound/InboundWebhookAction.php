<?php

declare(strict_types=1);

namespace Application\Actions\Inbound;

use Application\Abstracts\InboundNotificationData;
use Application\Contracts\Inbound\InboundWebhookOutboundActionInterface;
use Spatie\QueueableAction\QueueableAction;

class InboundWebhookAction implements InboundWebhookOutboundActionInterface
{
    use QueueableAction;

    public function execute(InboundNotificationData $data)
    {
        // TODO: Implement execute() method.
    }
}
