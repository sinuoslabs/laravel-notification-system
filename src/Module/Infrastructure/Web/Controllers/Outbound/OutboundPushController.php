<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\FcmRequest;
use Domain\Actions\Outbound\OutboundPushActionInterface;
use Domain\Enums\Channel;

class OutboundPushController
{
    private OutboundPushActionInterface $action;

    public function __construct(OutboundPushActionInterface $action)
    {
        $this->action = $action;
    }

    public function __invoke(FcmRequest $request): mixed
    {
        $this->action
            ->onQueue(Channel::PUSH->value)
            ->execute();

        return 'ok';
    }
}
