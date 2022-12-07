<?php

namespace App\Adapters\Concerns;

trait FcmMessageTrait
{
    private string $token;

    private string $title;

    private string $body;

    private array $data;

    private array $android;

    private array $apns;

    public function getToken(): string
    {
        return $this->token;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setToken($token): static
    {
        $this->token = $token;

        return $this;
    }

    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    public function setBody($body): static
    {
        $this->body = $body;

        return $this;
    }
}
