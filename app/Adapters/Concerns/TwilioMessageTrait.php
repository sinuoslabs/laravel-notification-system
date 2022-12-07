<?php

namespace App\Adapters\Concerns;

trait TwilioMessageTrait
{
    private string $recipient;

    private string $message;

    public function getRecipient(): string
    {
        return $this->recipient;
    }

    public function setRecipient($recipient): static
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage($message): static
    {
        $this->message = $message;

        return $this;
    }
}
