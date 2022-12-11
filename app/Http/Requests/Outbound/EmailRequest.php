<?php

declare(strict_types=1);

namespace App\Http\Requests\Outbound;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'to' => 'required|array',
            'to.*.user_id' => 'required|exists,users',
            'from.email' => 'required|email|exists,users',
            'subject' => 'required|string',
            'content' => 'required|array'
        ];
    }
}
