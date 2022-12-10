<?php

namespace Domain\Entities;

use Domain\ValueObjects\UserId;

class User
{
    public UserId $id;

    public ?string $name;

    public ?string $email;

    public ?string $phone;

    /**
     * @param UserId $id
     * @param string|null $name
     * @param string|null $email
     * @param string|null $phone
     */
    public function __construct(UserId $id, ?string $name, ?string $email, ?string $phone)
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
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }
}
