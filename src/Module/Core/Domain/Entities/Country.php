<?php

namespace Domain\Entities;

use Shared\Domain\Entity;

class Country extends Entity
{
    public string $name;

    public string $isoCode;

    public int $dialCode;

    public string $mask;

    /**
     * @param string $name
     * @param string $isoCode
     * @param int $dialCode
     * @param string $mask
     */
    public function __construct(string $name, string $isoCode, int $dialCode, string $mask)
    {
        $this->name = $name;
        $this->isoCode = $isoCode;
        $this->dialCode = $dialCode;
        $this->mask = $mask;

        parent::__construct();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     */
    public function setIsoCode(string $isoCode): void
    {
        $this->isoCode = $isoCode;
    }

    /**
     * @return int
     */
    public function getDialCode(): int
    {
        return $this->dialCode;
    }

    /**
     * @param int $dialCode
     */
    public function setDialCode(int $dialCode): void
    {
        $this->dialCode = $dialCode;
    }

    /**
     * @return string
     */
    public function getMask(): string
    {
        return $this->mask;
    }

    /**
     * @param string $mask
     */
    public function setMask(string $mask): void
    {
        $this->mask = $mask;
    }
}
