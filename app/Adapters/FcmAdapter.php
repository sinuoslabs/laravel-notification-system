<?php

namespace App\Adapters;

use App\Adapters\Concerns\FcmMessageTrait;

class FcmAdapter
{
    use FcmMessageTrait;

    private array $credentials;

    public function __construct(array $credentials)
    {
        $this->credentials = $credentials;
    }

    public function toFCM(): string|bool
    {
        return json_encode([
            'message' => [
                'token' => $this->getToken(),
                'notification' => [
                    'title' => $this->getTitle(),
                    'body' => $this->getBody(),
                ],
                'data' => [],
                'apns' => [],
                'android' => [],
            ]
        ]);
    }
}
