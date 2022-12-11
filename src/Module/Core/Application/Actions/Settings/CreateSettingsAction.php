<?php

namespace Application\Actions\Settings;

use Application\Abstracts\Actionable;
use Application\Abstracts\ActionableData;
use Domain\Contracts\UnitOfWorkInterface;
use Domain\Entities\Settings;
use Domain\Repositories\SettingRepositoryInterface;

class CreateSettingsAction extends Actionable
{
    public SettingRepositoryInterface $repository;

    public function __construct(UnitOfWorkInterface $unitOfWork, SettingRepositoryInterface $repository)
    {
        parent::__construct($unitOfWork);

        $this->repository = $repository;
    }

    /**
     * @param ActionableData $data
     * @return void
     */
    public function prepare(ActionableData $data): void
    {
        $settings = Settings::create($data->toArray());

        $this->repository->saveSettings($settings);
    }
}
