<?php

namespace Domain\Repositories;

use Domain\Entities\Settings;

interface SettingRepositoryInterface
{
    public function allSettings();

    public function getSettingsFromId(string $id);

    public function getSettingsFromUserId(string $id);

    public function saveSettings(Settings $settings);

    public function updateSettings(Settings $settings);

    public function deleteSettings(Settings $settings);
}
