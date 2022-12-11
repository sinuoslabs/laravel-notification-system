<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Application\Abstracts\Actionable;
use Application\Abstracts\ActionableData;
use Domain\Contracts\UnitOfWorkInterface;

class OutboundSmsAction extends Actionable
{
    public function prepare(ActionableData $data): mixed
    {
        return;
    }
}
