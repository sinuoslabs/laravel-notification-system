<?php

declare(strict_types=1);

namespace App\Http\Requests\Outbound;

use Illuminate\Foundation\Http\FormRequest;

class FcmRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            //
        ];
    }
}
