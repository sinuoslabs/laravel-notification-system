<?php

declare(strict_types=1);

namespace App\Http\Controllers\Outbound;

use Domain\Contracts\ActionInterface;
use Illuminate\Http\Request;

class NotificationController
{
    private ActionInterface $action;

    public function __construct(ActionInterface $action)
    {
        $this->action = $action;
    }

    /**
     * Handle the incoming request.
     *
     * @param  Request  $request
     */
    public function __invoke(Request $request)
    {
        return $this->action->execute();
    }
}
