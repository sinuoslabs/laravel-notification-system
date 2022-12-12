<?php

declare(strict_types=1);

namespace Infrastructure\Web\Controllers\Settings;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Shared\Application\Queryable;

class GetAllSettingsController
{
    public function __construct(private readonly Queryable $query)
    {
    }

    public function __invoke(Request $request): JsonResponse
    {
        return response()->json(
            data: $this->query->execute(),
            status: 200
        );
    }
}
