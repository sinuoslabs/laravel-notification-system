<?php

declare(strict_types=1);

namespace App\Providers;

use Application\Abstracts\Actionable;
use Application\Actions\Inbound\InboundWebhookAction;
use Application\Actions\Outbound\OutboundEmailAction;
use Application\Actions\Outbound\OutboundPushAction;
use Application\Actions\Outbound\OutboundSmsAction;
use Application\Actions\Outbound\OutboundWebhookAction;
use Domain\Abstracts\NotificationDomain;
use Application\Actions\Settings\CreateSettingsAction;
use Illuminate\Support\ServiceProvider;
use Infrastructure\providers\HttpNotificationProvider;
use Infrastructure\Web\Controllers\Inbound\InboundWebhookController;
use Infrastructure\Web\Controllers\Outbound\OutboundEmailController;
use Infrastructure\Web\Controllers\Outbound\OutboundPushController;
use Infrastructure\Web\Controllers\Outbound\OutboundSmsController;
use Infrastructure\Web\Controllers\Outbound\OutboundWebhookController;
use Infrastructure\Web\Controllers\Settings\CreateSettingsController;

class ActionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Register inbound controller's
        $this->app->when(InboundWebhookController::class)
            ->needs(Actionable::class)
            ->give(InboundWebhookAction::class);

        // Register outbound controller's
        $this->app->when(OutboundEmailController::class)
            ->needs(Actionable::class)
            ->give(OutboundEmailAction::class);

        $this->app->when(OutboundPushController::class)
            ->needs(Actionable::class)
            ->give(OutboundPushAction::class);

        $this->app->when(OutboundSmsController::class)
            ->needs(Actionable::class)
            ->give(OutboundSmsAction::class);

        $this->app->when(OutboundWebhookController::class)
            ->needs(Actionable::class)
            ->give(OutboundWebhookAction::class);

        $this->app->when(CreateSettingsController::class)
            ->needs(Actionable::class)
            ->give(CreateSettingsAction::class);

        // Register inbound controller's
        $this->app->when(OutboundWebhookAction::class)
            ->needs(NotificationDomain::class)
            ->give(HttpNotificationProvider::class);
    }

    public function boot(): void
    {
        //
    }
}
