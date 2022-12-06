<?php

namespace App\Http\Requests\Outbound;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
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
