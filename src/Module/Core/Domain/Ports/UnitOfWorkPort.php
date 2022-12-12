<?php

declare(strict_types=1);

namespace Domain\Ports;

interface UnitOfWorkPort
{
    public function execute(\Closure $callback);
}
