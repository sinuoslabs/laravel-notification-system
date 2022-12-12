<?php

namespace Infrastructure\Web\Controllers\Settings;

use App\Http\Requests\Settings\CreateSettingsRequest;
use Application\Factories\SettingsDataFactory;
use Illuminate\Http\JsonResponse;
use Shared\Application\Actionable;

class CreateSettingsController
{
    public function __construct(private readonly Actionable $actionable)
    {
        //
    }

    public function __invoke(CreateSettingsRequest $request): JsonResponse
    {
        $body = SettingsDataFactory::fromRequest($request);

        $this->actionable->execute($body);

        return response()->json(
            data: $body->toArray(),
            status: 200
        );
    }
}
