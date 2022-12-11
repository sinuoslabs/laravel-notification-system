<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Inbound;

use App\Http\Requests\Outbound\FcmRequest;
use Domain\Contracts\ActionInterface;

class InboundWebhookController
{
    private ActionInterface $action;

    public function __construct(ActionInterface $action)
    {
        $this->action = $action;
    }

    public function __invoke(FcmRequest $request)
    {
        return $this->action->execute();
    }
}
