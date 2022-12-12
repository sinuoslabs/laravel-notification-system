<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Shared\Application\Actionable;
use Shared\Application\Contracts\ActionableInput;

class OutboundSmsAction extends Actionable
{
    public function prepare(ActionableInput $data): mixed
    {
        return;
    }
}
