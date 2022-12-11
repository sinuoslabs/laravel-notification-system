<?php

declare(strict_types=1);

namespace Infrastructure\Persistences\Eloquent\Repositories;

use Domain\Entities\Settings;
use Domain\Repositories\SettingRepositoryInterface;
use Infrastructure\Persistences\Eloquent\Models\SettingsModel;

class EloquentSettingsRepository implements SettingRepositoryInterface
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
        return SettingsModel::create([
            'id' => $settings->getId(),
            'user_id' => $settings->getUserId(),
            'channel' => $settings->getChannel(),
            'opt-in' => $settings->isOptIn(),
        ]);
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
