<?php

namespace Application\Actions\Settings;

use Domain\Ports\UnitOfWorkPort;
use Domain\Entities\Settings;
use Domain\Repositories\SettingRepositoryInterface;
use Shared\Application\Actionable;
use Shared\Application\Contracts\ActionableInput;

class CreateSettingsAction extends Actionable
{
    public SettingRepositoryInterface $repository;

    public function __construct(UnitOfWorkPort $unitOfWork, SettingRepositoryInterface $repository)
    {
        parent::__construct($unitOfWork);

        $this->repository = $repository;
    }

    /**
     * @param ActionableInput $data
     * @return void
     */
    public function prepare(ActionableInput $data): void
    {
        $settings = Settings::create($data->toArray());

        $this->repository->saveSettings($settings);
    }
}
