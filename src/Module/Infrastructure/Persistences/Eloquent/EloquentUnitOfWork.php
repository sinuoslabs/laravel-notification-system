<?php

namespace Infrastructure\Persistences\Eloquent;

use Domain\Contracts\UnitOfWorkInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
            Log::debug("[transaction started]");

            // Call closure function
            $callback();

            // commit transaction
            DB::commit();
            Log::debug("[transaction is committed]");

            return $callback;
        } catch (\Exception $e) {
            // rollback transaction
            DB::rollBack();
            Log::error("[transaction rolled back] - {$e->getMessage()} with code {$e->getCode()}");

            throw $e;
        }
    }
}
