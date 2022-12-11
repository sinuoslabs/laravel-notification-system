<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Requests\Outbound\FcmRequest;
use Domain\Actions\Outbound\OutboundPushActionInterface;

class OutboundPushController
{
    private OutboundPushActionInterface $action;

    public function __construct(OutboundPushActionInterface $action)
    {
        $this->action = $action;
    }

    /**
     * Handle the incoming request.
     *
     * @param FcmRequest $request
     * @return mixed
     */
    public function __invoke(FcmRequest $request): mixed
    {
        $this->action->execute();

        return 'ok';
    }
}
