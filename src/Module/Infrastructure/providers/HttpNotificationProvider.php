<?php

declare(strict_types=1);

namespace Infrastructure\providers;

use Domain\Abstracts\MessageDomain;
use Domain\Abstracts\NotificationDomain;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class HttpNotificationProvider extends NotificationDomain
{
    /**
     * Send http notification provider
     *
     * @throws \Exception
     */
    public function send(MessageDomain $message)
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
