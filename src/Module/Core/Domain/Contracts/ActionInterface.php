<?php

declare(strict_types=1);

namespace Domain\Contracts;

interface ActionInterface
{
    public function execute(RequestTransformerInterface $data);
}
