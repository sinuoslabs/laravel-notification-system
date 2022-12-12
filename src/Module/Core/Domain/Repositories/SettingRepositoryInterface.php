<?php

declare(strict_types=1);

namespace Domain\Repositories;

use Domain\Entities\Settings;

interface SettingRepositoryInterface
{
    public function allSettings(): array;

    public function getSettingsFromId(string $id): Settings;

    public function getSettingsFromUserId(string $id): Settings;

    public function saveSettings(Settings $settings);

    public function updateSettings(Settings $settings): Settings;
}
