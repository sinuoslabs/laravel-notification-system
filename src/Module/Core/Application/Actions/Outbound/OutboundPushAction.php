<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Shared\Application\Actionable;
use Shared\Application\ActionableData;

class OutboundPushAction extends Actionable
{
    public function prepare(ActionableData $data): mixed
    {
        return;
    }
}
