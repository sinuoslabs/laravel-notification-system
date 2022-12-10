<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Requests\Outbound\FcmRequest;
use Domain\Actions\Outbound\OutboundWebhookActionInterface;

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
        return $this->action->execute();
    }
}
