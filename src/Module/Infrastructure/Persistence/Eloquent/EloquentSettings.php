<?php

namespace Infrastructure\Persistence\Eloquent;

use Domain\Entities\Settings;

class EloquentSettings implements \Domain\Repositories\SettingRepositoryInterface
{

    public function allSettings()
    {
        // TODO: Implement allSettings() method.
    }

    public function getSettingsFromId(string $id)
    {
        // TODO: Implement getSettingsFromId() method.
    }

    public function getSettingsFromUserId(string $id)
    {
        // TODO: Implement getSettingsFromUserId() method.
    }

    public function saveSettings(Settings $settings)
    {
        // TODO: Implement saveSettings() method.
    }

    public function updateSettings(Settings $settings)
    {
        // TODO: Implement updateSettings() method.
    }

    public function deleteSettings(Settings $settings)
    {
        // TODO: Implement deleteSettings() method.
    }
}