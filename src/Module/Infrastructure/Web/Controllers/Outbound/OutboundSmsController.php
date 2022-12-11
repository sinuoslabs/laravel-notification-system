<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Outbound;

use App\Http\Requests\Outbound\SmsRequest;
use Domain\Actions\Outbound\OutboundSmsActionInterface;
use Domain\Enums\Channel;

class OutboundSmsController
{
    private OutboundSmsActionInterface $action;

    public function __construct(OutboundSmsActionInterface $action)
    {
        $this->action = $action;
    }

    public function __invoke(SmsRequest $request)
    {
        $this->action
            ->onQueue(Channel::SMS->value)
            ->execute();

        return 'ok';
    }
}
