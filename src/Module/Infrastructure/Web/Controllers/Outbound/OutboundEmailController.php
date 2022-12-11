<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\EmailRequest;
use Application\Contracts\Outbound\OutboundEmailOutboundActionInterface;
use Domain\Enums\NotificationChannel;

class OutboundEmailController
{
    public function __construct(private OutboundEmailOutboundActionInterface $action)
    {
    }

    public function __invoke(EmailRequest $request)
    {
        $this->action
            ->onQueue(NotificationChannel::EMAIL->value)
            ->execute();

        return 'ok';
    }
}
