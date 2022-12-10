<?php

declare(strict_types=1);

namespace App\Providers;

use App\Http\Controllers\Outbound\OutboundEmailController;
use App\Http\Controllers\Outbound\OutboundPushController;
use App\Http\Controllers\Outbound\OutboundSmsController;
use App\Http\Controllers\Outbound\OutboundWebhookController;
use App\Http\Controllers\Inbound\InboundWebhookController;
use Application\Actions\Outbound\OutboundSendEmailAction;
use Application\Actions\Outbound\OutboundSendPushAction;
use Application\Actions\Outbound\OutboundSendSmsAction;
use Application\Actions\Outbound\OutboundSendWebhookAction;
use Application\Actions\Inbound\InboundSendWebhookAction;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->scoped(OutboundEmailController::class, function ($app) {
            return new OutboundEmailController($app->make(OutboundSendEmailAction::class));
        });

        $this->app->scoped(OutboundPushController::class, function ($app) {
            return new OutboundPushController($app->make(OutboundSendPushAction::class));
        });

        $this->app->scoped(OutboundSmsController::class, function ($app) {
            return new OutboundSmsController($app->make(OutboundSendSmsAction::class));
        });

        $this->app->scoped(OutboundWebhookController::class, function ($app) {
            return new OutboundWebhookController($app->make(OutboundSendWebhookAction::class));
        });

        $this->app->scoped(InboundWebhookController::class, function ($app) {
            return new InboundWebhookController($app->make(InboundSendWebhookAction::class));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
