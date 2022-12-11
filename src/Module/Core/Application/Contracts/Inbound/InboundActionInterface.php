<?php

declare(strict_types=1);

namespace Application\Contracts\Inbound;

use Application\Abstracts\InboundNotificationData;

interface InboundActionInterface
{
    public function execute(InboundNotificationData $data);
}
