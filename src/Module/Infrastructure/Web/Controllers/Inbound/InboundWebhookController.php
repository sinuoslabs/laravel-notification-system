<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Inbound;

use App\Http\Requests\Outbound\FcmRequest;
use Application\Contracts\Outbound\OutboundActionInterface;

class InboundWebhookController
{
    public function __construct(private OutboundActionInterface $action)
    {
    }

    public function __invoke(FcmRequest $request)
    {
        return $this->action->execute();
    }
}
