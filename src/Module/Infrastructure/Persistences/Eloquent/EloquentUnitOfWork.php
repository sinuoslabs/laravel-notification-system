<?php

namespace Infrastructure\Persistences\Eloquent;

use Domain\Contracts\UnitOfWorkInterface;
use Illuminate\Support\Facades\DB;

class EloquentUnitOfWork implements UnitOfWorkInterface
{
    /**
     * @throws \Exception
     */
    public function execute(\Closure $callback): \Closure
    {
        try {
            // start transaction
            DB::beginTransaction();

            // Call closure function
            $content = $callback();

            // commit transaction
            DB::commit();

            return $content;
        } catch (\Exception $e) {
            // rollback transaction
            DB::rollBack();

            throw $e;
        }
    }
}
