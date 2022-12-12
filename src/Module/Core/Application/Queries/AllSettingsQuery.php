<?php

namespace Application\Queries;

use Application\Contracts\QueryInterface;
use Domain\Repositories\SettingRepositoryInterface;

class AllSettingsQuery extends QueryInterface
{
    public function __construct(public readonly SettingRepositoryInterface $repository)
    {
    }

    /**
     * @return mixed
     */
    public function handle(): mixed
    {
        return $this->repository->allSettings();
    }
}
