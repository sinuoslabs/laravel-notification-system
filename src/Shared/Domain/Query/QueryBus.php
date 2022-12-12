<?php

namespace Shared\Domain\Query;

interface QueryBus
{
    public function handle(Query $query): mixed;
}
