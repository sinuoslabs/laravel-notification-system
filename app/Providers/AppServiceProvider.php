<?php

declare(strict_types=1);

namespace App\Providers;

use App\Http\Controllers\Outbound\EmailController;
use App\Http\Controllers\Outbound\PushController;
use App\Http\Controllers\Outbound\SmsController;
use App\Http\Controllers\Outbound\WebhookController;
use App\Http\Controllers\Inbound\WebhookController as InboundWebhookNotification;
use Application\Actions\Outbound\SendEmailAction;
use Application\Actions\Outbound\SendPushAction;
use Application\Actions\Outbound\SendSmsAction;
use Application\Actions\Outbound\SendWebhookAction;
use Application\Actions\Inbound\SendWebhookAction as InboundWebhookAction;
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
        $this->app->scoped(EmailController::class, function ($app) {
            return new EmailController($app->make(SendEmailAction::class));
        });

        $this->app->scoped(PushController::class, function ($app) {
            return new PushController($app->make(SendPushAction::class));
        });

        $this->app->scoped(SmsController::class, function ($app) {
            return new SmsController($app->make(SendSmsAction::class));
        });

        $this->app->scoped(WebhookController::class, function ($app) {
            return new WebhookController($app->make(SendWebhookAction::class));
        });

        $this->app->scoped(InboundWebhookNotification::class, function ($app) {
            return new InboundWebhookNotification($app->make(InboundWebhookAction::class));
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
