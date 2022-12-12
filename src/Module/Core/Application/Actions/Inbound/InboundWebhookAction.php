<?php

declare(strict_types=1);

namespace Application\Actions\Inbound;

use Domain\Ports\UnitOfWorkPort;
use Shared\Application\Actionable;
use Shared\Application\Contracts\ActionableInput;

class InboundWebhookAction extends Actionable
{
    public function __construct(UnitOfWorkPort $unitOfWork)
    {
        parent::__construct($unitOfWork);
    }

    public function prepare(ActionableInput $data): mixed
    {
        return;
    }
}
