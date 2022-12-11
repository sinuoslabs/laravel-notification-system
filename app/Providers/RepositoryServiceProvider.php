<?php

declare(strict_types=1);

namespace App\Providers;

use Domain\Repositories\DeviceRepositoryInterface;
use Domain\Repositories\NotificationRepositoryInterface;
use Domain\Repositories\SettingRepositoryInterface;
use Domain\Repositories\TemplateRepositoryInterface;
use Domain\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Persistences\Eloquent\Repositories\EloquentDeviceRepository;
use Infrastructure\Persistences\Eloquent\Repositories\EloquentNotificationRepository;
use Infrastructure\Persistences\Eloquent\Repositories\EloquentSettingsRepository;
use Infrastructure\Persistences\Eloquent\Repositories\EloquentTemplateRepository;
use Infrastructure\Persistences\Eloquent\Repositories\EloquentUserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(DeviceRepositoryInterface::class, EloquentDeviceRepository::class);
        $this->app->bind(SettingRepositoryInterface::class, EloquentSettingsRepository::class);
        $this->app->bind(TemplateRepositoryInterface::class, EloquentTemplateRepository::class);
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
        $this->app->bind(NotificationRepositoryInterface::class, EloquentNotificationRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
