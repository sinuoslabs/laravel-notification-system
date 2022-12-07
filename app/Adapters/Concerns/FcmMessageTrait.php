<?php

namespace App\Adapters\Concerns;

trait FcmMessageTrait
{
    private string $title;

    private string $body;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
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
