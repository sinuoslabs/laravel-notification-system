<?php

namespace Domain\Entities;

use Domain\ValueObjects\EmailAddress;
use Domain\ValueObjects\PhoneNumber;
use Domain\ValueObjects\UserId;

class User
{
    public UserId $id;

    public ?string $name;

    public ?EmailAddress $email;

    public ?PhoneNumber $phone;

    /**
     * @param UserId $id
     * @param string|null $name
     * @param EmailAddress|null $email
     * @param PhoneNumber|null $phone
     */
    public function __construct(UserId $id, ?string $name, ?EmailAddress $email, ?PhoneNumber $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return UserId
     */
    public function getId(): UserId
    {
        return $this->id;
    }

    /**
     * @param UserId $id
     */
    public function setId(UserId $id): void
    {
        $this->id = $id;
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
