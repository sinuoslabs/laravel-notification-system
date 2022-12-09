<?php

declare(strict_types=1);

namespace App\Http\Controllers\Inbound;

use App\Http\Requests\Outbound\FcmRequest;
use Domain\Contracts\ActionInterface;

class WebhookController
{
    private ActionInterface $action;

    public function __construct(ActionInterface $action)
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
