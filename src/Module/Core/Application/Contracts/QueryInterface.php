<?php

namespace Application\Contracts;

abstract class QueryInterface
{
    abstract public function handle(): mixed;
}
