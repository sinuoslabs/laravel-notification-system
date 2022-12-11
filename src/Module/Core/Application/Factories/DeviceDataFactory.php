<?php

namespace Application\Factories;

use Application\Abstracts\ApiData;

class DeviceDataFactory extends ApiData
{

    /**
     * @return array
     */
    public function toArray(): array
    {
        return (array) $this;
    }
}
