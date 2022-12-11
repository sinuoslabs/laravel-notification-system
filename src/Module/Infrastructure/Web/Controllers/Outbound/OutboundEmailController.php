<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\EmailRequest;
use Application\Contracts\Outbound\OutboundEmailOutboundActionInterface;
use Domain\Enums\NotificationChannel;

class OutboundEmailController
{
    private OutboundEmailOutboundActionInterface $action;

    public function __construct(OutboundEmailOutboundActionInterface $action)
    {
        $this->action = $action;
    }

    public function __invoke(EmailRequest $request)
    {
        $this->action
            ->onQueue(NotificationChannel::EMAIL->value)
            ->execute();

        return 'ok';
    }
}
