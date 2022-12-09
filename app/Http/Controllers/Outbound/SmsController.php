<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Requests\Outbound\SmsRequest;
use Domain\Contracts\ActionInterface;

class SmsController
{
    private ActionInterface $action;

    public function __construct(ActionInterface $action)
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
