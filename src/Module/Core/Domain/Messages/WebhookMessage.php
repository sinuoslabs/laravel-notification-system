<?php

namespace Domain\Messages;

use Domain\Abstracts\MessageDomain;

class WebhookMessage extends MessageDomain
{
    private string $url;

    private array $header;

    private array $body;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return WebhookMessage
     */
    public function setUrl(string $url): WebhookMessage
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return array
     */
    public function getHeader(): array
    {
        return $this->header;
    }

    /**
     * @param array|null $header
     * @return WebhookMessage
     */
    public function setHeader(?array $header): WebhookMessage
    {
        $this->header = $header ?? [];

        return $this;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @param array $body
     * @return WebhookMessage
     */
    public function setBody(array $body): WebhookMessage
    {
        $this->body = $body;

        return $this;
    }
}
