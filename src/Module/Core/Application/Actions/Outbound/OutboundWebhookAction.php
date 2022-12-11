<?php

namespace Application\Actions\Outbound;

use Domain\Actions\Outbound\OutboundWebhookActionInterface;
use Domain\Enums\Channel;
use Spatie\QueueableAction\QueueableAction;

class OutboundWebhookAction implements OutboundWebhookActionInterface
{
    use QueueableAction;

    public function __construct()
    {
        $this->onQueue(Channel::WEBHOOK->value);
    }

    public function execute()
    {
        // TODO: Implement execute() method.
    }

    /**
     * Calculate the number of seconds to wait before retrying the job.
     *
     * @return array
     */
    public function backoff(): array
    {
        return [2, 5, 10, 15, 30];
    }
}
