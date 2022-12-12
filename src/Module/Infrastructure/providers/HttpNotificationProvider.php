<?php

declare(strict_types=1);

namespace Infrastructure\providers;

use Domain\Ports\MessagePort;
use Domain\Ports\NotificationPort;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HttpNotificationProvider implements NotificationPort
{
    /**
     * Send http notification provider
     *
     * @throws \Exception
     */
    public function send(MessagePort $message)
    {
        try {
            return Http::asJson()
                ->acceptJson()
                ->withHeaders($message->getHeader())
                ->retry(3, 100, function ($exception, $request) {

                })
                ->post($message->getUrl(), $message->getBody())
                ->json();
        } catch (\Exception $e) {
            Log::debug("[HTTP notification] - {$e->getMessage()}");

            throw $e;
        }
    }
}
