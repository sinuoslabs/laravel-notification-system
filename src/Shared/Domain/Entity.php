<?php

declare(strict_types=1);

namespace Shared\Domain;

use DateTimeInterface;
use Ramsey\Uuid\Uuid;

abstract class Entity
{
    protected string $id;

    protected DateTimeInterface $createdAt;

    protected DateTimeInterface $updatedAt;

    protected ?DateTimeInterface $deletedAt = null;

    public function __construct()
    {
        $this->id = Uuid::uuid4()->toString();
        $this->createdAt = now();
        $this->updatedAt = now();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(DateTimeInterface $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getDeletedAt(): ?DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?DateTimeInterface $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }
}
