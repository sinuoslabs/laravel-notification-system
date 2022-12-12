<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\EmailRequest;
use Shared\Application\Actionable;

class OutboundEmailController
{
    public function __construct(private readonly Actionable $actionable)
    {
    }

    public function __invoke(EmailRequest $request)
    {
//        $this->actionable
//            ->onQueue(NotificationChannel::EMAIL->value)
//            ->execute();

        return 'ok';
    }
}
