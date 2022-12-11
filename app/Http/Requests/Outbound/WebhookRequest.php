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
            'to' => ['required', 'array'],
            'to.url' => ['required', 'url'],
            'to.header' => ['array'],
            'to.body' => ['required', 'array'],
        ];
    }
}
