<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\FcmRequest;
use Domain\Actions\Outbound\OutboundWebhookActionInterface;
use Domain\Enums\Channel;

class OutboundWebhookController
{
    private OutboundWebhookActionInterface $action;

    public function __construct(OutboundWebhookActionInterface $action)
    {
        $this->action = $action;
    }

    /**
     * Handle the incoming request.
     *
     * @param FcmRequest $request
     */
    public function __invoke(FcmRequest $request)
    {
        $this->action
            ->onQueue(Channel::WEBHOOK->value)
            ->execute();

        return 'ok';
    }
}
