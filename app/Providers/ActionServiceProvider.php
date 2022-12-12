<?php

declare(strict_types=1);

namespace App\Providers;

use Application\Actions\Outbound\OutboundWebhookAction;
use Domain\Abstracts\NotificationDomain;
use Illuminate\Support\ServiceProvider;
use Infrastructure\providers\HttpNotificationProvider;

class ActionServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Register outbound action's
        $this->app->when(OutboundWebhookAction::class)
            ->needs(NotificationDomain::class)
            ->give(HttpNotificationProvider::class);
    }

    public function boot(): void
    {
        //
    }
}
