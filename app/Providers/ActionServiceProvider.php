<?php

namespace App\Providers;

use Application\Actions\Inbound\InboundWebhookAction;
use Application\Actions\Outbound\OutboundEmailAction;
use Application\Actions\Outbound\OutboundPushAction;
use Application\Actions\Outbound\OutboundSmsAction;
use Application\Actions\Outbound\OutboundWebhookAction;
use Domain\Actions\Inbound\InboundWebhookActionInterface;
use Domain\Actions\Outbound\OutboundEmailActionInterface;
use Domain\Actions\Outbound\OutboundPushActionInterface;
use Domain\Actions\Outbound\OutboundSmsActionInterface;
use Domain\Actions\Outbound\OutboundWebhookActionInterface;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        // Register inbound method's
        $this->app->bind(InboundWebhookActionInterface::class, InboundWebhookAction::class);

        // Register outbound method's
        $this->app->bind(OutboundEmailActionInterface::class, OutboundEmailAction::class);
        $this->app->bind(OutboundPushActionInterface::class, OutboundPushAction::class);
        $this->app->bind(OutboundSmsActionInterface::class, OutboundSmsAction::class);
        $this->app->bind(OutboundWebhookActionInterface::class, OutboundWebhookAction::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
