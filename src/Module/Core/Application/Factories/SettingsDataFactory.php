<?php

namespace Application\Factories;

use App\Http\Requests\Settings\CreateSettingsRequest;
use Application\Abstracts\ActionableData;

class SettingsDataFactory extends ActionableData
{
    public function __construct(
        public readonly string $userId,
        public readonly string $channel,
        public readonly ?bool  $optIn,
    )
    {
    }

    public static function fromRequest(CreateSettingsRequest $request): SettingsDataFactory
    {
        return new self(
            userId: $request->get('userId'),
            channel: $request->get('channel'),
            optIn: $request->get('optIn'),
        );
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return (array)$this;
    }
}
