<?php

namespace Application\Factories;

use Shared\Application\Contracts\ActionableInput;

class DeviceDataFactory implements ActionableInput
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        return (array) $this;
    }
}
