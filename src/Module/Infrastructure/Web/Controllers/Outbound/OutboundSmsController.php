<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\SmsRequest;
use Application\Contracts\Outbound\OutboundSmsOutboundActionInterface;
use Domain\Enums\NotificationChannel;

class OutboundSmsController
{
    private OutboundSmsOutboundActionInterface $action;

    public function __construct(OutboundSmsOutboundActionInterface $action)
    {
        $this->action = $action;
    }

    public function __invoke(SmsRequest $request)
    {
        $this->action
            ->onQueue(NotificationChannel::SMS->value)
            ->execute();

        return 'ok';
    }
}
