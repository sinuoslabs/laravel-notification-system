<?php

declare(strict_types=1);

namespace Domain\Entities;

use Domain\ValueObjects\EmailAddress;
use Domain\ValueObjects\PhoneNumber;
use Shared\Domain\Entity;

class User extends Entity
{
    public function __construct(public ?string $name = null, public ?\Domain\ValueObjects\EmailAddress $email = null, public ?\Domain\ValueObjects\PhoneNumber $phone = null)
    {
        parent::__construct();
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?EmailAddress
    {
        return $this->email;
    }

    public function setEmail(?EmailAddress $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): ?PhoneNumber
    {
        return $this->phone;
    }

    public function setPhone(?PhoneNumber $phone): void
    {
        $this->phone = $phone;
    }
}
