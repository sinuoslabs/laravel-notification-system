<?php

namespace Application\Queries;

use Domain\Repositories\SettingRepositoryInterface;
use Shared\Application\Contracts\QueryableInput;
use Shared\Application\Queryable;

class GetAllSettingsQuery extends Queryable
{
    public function __construct(public readonly SettingRepositoryInterface $settingRepository)
    {
    }

    public function handle(?QueryableInput $query): mixed
    {
        return $this->settingRepository->allSettings();
    }
}
