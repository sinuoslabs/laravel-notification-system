<?php

namespace Application\Abstracts;

use Domain\Contracts\UnitOfWorkInterface;
use Spatie\QueueableAction\QueueableAction;

abstract class Actionable
{
    use QueueableAction;

    private UnitOfWorkInterface $unitOfWork;

    /**
     * @param ActionableData $data
     * @return mixed
     */
    public abstract function prepare(ActionableData $data);

    /**
     * @param UnitOfWorkInterface $unitOfWork
     */
    public function __construct(UnitOfWorkInterface $unitOfWork)
    {
        $this->unitOfWork = $unitOfWork;
    }

    /**
     * @return int[]
     */
    public function backoff(): array
    {
        return [2, 5, 10, 15, 30];
    }

    /**
     * @param ActionableData $data
     * @return mixed
     */
    public function execute(ActionableData $data)
    {
        $this->unitOfWork->execute($this->prepare($data));
    }
}
