<?php

declare(strict_types=1);

namespace App\Providers;

use Domain\Repositories\DeviceRepositoryInterface;
use Domain\Repositories\SettingRepositoryInterface;
use Domain\Repositories\TemplateRepositoryInterface;
use Domain\Repositories\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Repositories\DeviceRepository;
use Infrastructure\Repositories\SettingRepository;
use Infrastructure\Repositories\TemplateRepository;
use Infrastructure\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(DeviceRepositoryInterface::class, DeviceRepository::class);
        $this->app->bind(SettingRepositoryInterface::class, SettingRepository::class);
        $this->app->bind(TemplateRepositoryInterface::class, TemplateRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
