<?php

namespace Application\Actions\Outbound;

use Domain\Actions\Outbound\OutboundEmailActionInterface;
use Domain\Enums\Channel;
use Spatie\QueueableAction\QueueableAction;

class OutboundEmailAction implements OutboundEmailActionInterface
{
    use QueueableAction;

    public function __construct()
    {
        $this->onQueue(Channel::EMAIL->value);
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
