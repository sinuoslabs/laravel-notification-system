<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\FcmRequest;
use Application\Abstracts\Actionable;
use Domain\Enums\NotificationChannel;

class OutboundPushController
{
    public function __construct(private Actionable $actionable)
    {
    }

    public function __invoke(FcmRequest $request): mixed
    {
//        $this->action
//            ->onQueue(NotificationChannel::PUSH->value)
//            ->execute();

        return 'ok';
    }
}
