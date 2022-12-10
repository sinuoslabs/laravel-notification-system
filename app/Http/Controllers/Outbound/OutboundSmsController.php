<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Requests\Outbound\SmsRequest;
use Domain\Actions\Outbound\OutboundSmsActionInterface;

class OutboundSmsController
{
    private OutboundSmsActionInterface $action;

    public function __construct(OutboundSmsActionInterface $action)
    {
        $this->action = $action;
    }

    /**
     * Handle the incoming request.
     *
     * @param SmsRequest $request
     */
    public function __invoke(SmsRequest $request)
    {
        return $this->action->execute();
    }
}
