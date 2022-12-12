<?php

namespace Shared\Application;

use Shared\Application\Contracts\QueryableInput;

abstract class Queryable
{
    /**
     * @param QueryableInput|null $query
     * @return mixed
     */
    public abstract function handle(?QueryableInput $query): mixed;

    /**
     * @param QueryableInput|null $query
     * @return mixed
     */
    final public function execute(?QueryableInput $query): mixed
    {
        return $this->handle($query);
    }
}
