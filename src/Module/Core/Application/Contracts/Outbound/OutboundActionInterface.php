<?php

declare(strict_types=1);

namespace Application\Contracts\Outbound;

use Application\Abstracts\OutboundNotificationData;

interface OutboundActionInterface
{
    public function execute(OutboundNotificationData $data);
}
