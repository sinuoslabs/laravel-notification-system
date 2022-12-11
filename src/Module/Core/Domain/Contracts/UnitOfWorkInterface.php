<?php

declare(strict_types=1);

namespace Domain\Contracts;

interface UnitOfWorkInterface
{
    public function execute(\Closure $callback);
}
