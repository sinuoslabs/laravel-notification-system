<?php

declare(strict_types=1);

namespace Application\Actions\Outbound;

use Application\Abstracts\Actionable;
use Application\Abstracts\ActionableData;
use Domain\Contracts\UnitOfWorkInterface;

class OutboundEmailAction extends Actionable
{
    public function __construct(UnitOfWorkInterface $unitOfWork)
    {
        parent::__construct($unitOfWork);
    }

    public function prepare(ActionableData $data): mixed
    {
        return;
    }
}
