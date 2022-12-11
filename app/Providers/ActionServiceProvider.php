<?php

declare(strict_types=1);

namespace App\Providers;

use Application\Actions\Inbound\InboundWebhookAction;
use Application\Actions\Outbound\OutboundEmailAction;
use Application\Actions\Outbound\OutboundPushAction;
use Application\Actions\Outbound\OutboundSmsAction;
use Application\Actions\Outbound\OutboundWebhookAction;
use Application\Contracts\Inbound\InboundWebhookOutboundActionInterface;
use Application\Contracts\Outbound\OutboundEmailOutboundActionInterface;
use Application\Contracts\Outbound\OutboundPushOutboundActionInterface;
use Application\Contracts\Outbound\OutboundSmsOutboundActionInterface;
use Application\Contracts\Outbound\OutboundWebhookOutboundActionInterface;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Register inbound method's
        $this->app->bind(InboundWebhookOutboundActionInterface::class, InboundWebhookAction::class);

        // Register outbound method's
        $this->app->bind(OutboundEmailOutboundActionInterface::class, OutboundEmailAction::class);
        $this->app->bind(OutboundPushOutboundActionInterface::class, OutboundPushAction::class);
        $this->app->bind(OutboundSmsOutboundActionInterface::class, OutboundSmsAction::class);
        $this->app->bind(OutboundWebhookOutboundActionInterface::class, OutboundWebhookAction::class);
    }

    public function boot(): void
    {
        //
    }
}
