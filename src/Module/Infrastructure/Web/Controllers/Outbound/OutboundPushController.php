<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\FcmRequest;
use Application\Contracts\Outbound\OutboundPushOutboundActionInterface;
use Domain\Enums\NotificationChannel;

class OutboundPushController
{
    private OutboundPushOutboundActionInterface $action;

    public function __construct(OutboundPushOutboundActionInterface $action)
    {
        $this->action = $action;
    }

    public function __invoke(FcmRequest $request): mixed
    {
        $this->action
            ->onQueue(NotificationChannel::PUSH->value)
            ->execute();

        return 'ok';
    }
}
