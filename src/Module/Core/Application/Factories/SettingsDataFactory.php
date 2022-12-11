<?php

namespace Application\Factories;

use Application\Abstracts\ApiData;

class SettingsDataFactory extends ApiData
{

    /**
     * @return array
     */
    public function toArray(): array
    {
        return (array) $this;
    }
}
