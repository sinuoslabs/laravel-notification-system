<?php

namespace Application\Actions\Outbound;

use Domain\Contracts\ActionInterface;

class SendPushAction implements ActionInterface
{
    public function execute()
    {
        return json_encode([
            'status' => 200
        ]);
    }
}
