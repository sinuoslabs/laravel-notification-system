<?php

namespace Infrastructure\Web\Controllers\Settings;

use Application\Contracts\QueryInterface;
use Application\Queries\AllSettingsQuery;
use Illuminate\Http\Request;

class AllSettingsController
{
    public function __construct(private readonly AllSettingsQuery $query)
    {
    }

    public function __invoke(Request $request)
    {
        return response()->json(
            data: $this->query->handle(),
            status: 200
        );
    }
}
