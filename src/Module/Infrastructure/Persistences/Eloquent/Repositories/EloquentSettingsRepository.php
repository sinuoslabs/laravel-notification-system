<?php

declare(strict_types=1);

namespace Infrastructure\Persistences\Eloquent\Repositories;

use Domain\Entities\Settings;
use Domain\Repositories\SettingRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Infrastructure\Persistences\Eloquent\Models\SettingsModel;

class EloquentSettingsRepository implements SettingRepositoryInterface
{
    private Builder $model;

    public function __construct()
    {
        $this->model = SettingsModel::query();
    }

    public function allSettings(): array
    {
        return $this->model->get()->toArray();
    }

    public function getSettingsFromId(string $id): Settings
    {
        // TODO: Implement getSettingsFromId() method.
    }

    public function getSettingsFromUserId(string $id): Settings
    {
        // TODO: Implement getSettingsFromUserId() method.
    }

    public function saveSettings(Settings $settings)
    {
        return $this->model->create([
            'id' => $settings->getId(),
            'user_id' => $settings->getUserId(),
            'channel' => $settings->getChannel(),
            'opt-in' => $settings->isOptIn(),
        ]);
    }

    public function updateSettings(Settings $settings): Settings
    {
        // TODO: Implement updateSettings() method.
    }

    public function deleteSettings(Settings $settings)
    {
        // TODO: Implement deleteSettings() method.
    }
}
