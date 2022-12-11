<?php

declare(strict_types=1);

namespace App\Http\Requests\Outbound;

use Domain\Enums\NotificationType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WebhookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'notificationType' => ['required', Rule::enum(NotificationType::class)],
            'userId' => ['required', 'uuid'],
            'payload' => ['required', 'array'],
            'payload.url' => ['required', 'url'],
            'payload.header' => ['array'],
            'payload.body' => ['required', 'array'],
        ];
    }
}
