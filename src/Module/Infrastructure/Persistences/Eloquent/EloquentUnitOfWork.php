<?php

namespace Infrastructure\Persistences\Eloquent;

use Domain\Contracts\UnitOfWorkInterface;

class EloquentUnitOfWork implements UnitOfWorkInterface
{
    public function execute(\Closure $callback)
    {
        // TODO: Implement execute() method.
    }
}
