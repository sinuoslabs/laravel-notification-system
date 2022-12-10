<?php

namespace Domain\Entities;

use Domain\ValueObjects\EmailAddress;
use Domain\ValueObjects\PhoneNumber;
use Shared\Domain\Entity;

class User extends Entity
{
    public ?string $name;

    public ?EmailAddress $email;

    public ?PhoneNumber $phone;

    /**
     * @param string|null $name
     * @param EmailAddress|null $email
     * @param PhoneNumber|null $phone
     */
    public function __construct(?string $name = null, ?EmailAddress $email = null, ?PhoneNumber $phone = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;

        parent::__construct();
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return EmailAddress|null
     */
    public function getEmail(): ?EmailAddress
    {
        return $this->email;
    }

    /**
     * @param EmailAddress|null $email
     */
    public function setEmail(?EmailAddress $email): void
    {
        $this->email = $email;
    }

    /**
     * @return PhoneNumber|null
     */
    public function getPhone(): ?PhoneNumber
    {
        return $this->phone;
    }

    /**
     * @param PhoneNumber|null $phone
     */
    public function setPhone(?PhoneNumber $phone): void
    {
        $this->phone = $phone;
    }
}
