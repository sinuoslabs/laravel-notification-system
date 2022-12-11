<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\SmsRequest;
use Application\Abstracts\Actionable;
use Domain\Enums\NotificationChannel;

class OutboundSmsController
{
    public function __construct(private Actionable $actionable)
    {
    }

    public function __invoke(SmsRequest $request)
    {
//        $this->action
//            ->onQueue(NotificationChannel::SMS->value)
//            ->execute();

        return 'ok';
    }
}
