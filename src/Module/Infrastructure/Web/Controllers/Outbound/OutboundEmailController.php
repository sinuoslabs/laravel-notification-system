<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\EmailRequest;
use Domain\Actions\Outbound\OutboundEmailActionInterface;
use Domain\Enums\NotificationChannel;

class OutboundEmailController
{
    private OutboundEmailActionInterface $action;

    public function __construct(OutboundEmailActionInterface $action)
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
