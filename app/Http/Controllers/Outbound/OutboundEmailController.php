<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use App\Http\Requests\Outbound\EmailRequest;
use Domain\Actions\Outbound\OutboundEmailActionInterface;

class OutboundEmailController
{
    private OutboundEmailActionInterface $action;

    public function __construct(OutboundEmailActionInterface $action)
    {
        $this->action = $action;
    }

    /**
     * Handle the incoming request.
     *
     * @param EmailRequest $request
     */
    public function __invoke(EmailRequest $request)
    {
        return $this->action->execute();
    }
}
