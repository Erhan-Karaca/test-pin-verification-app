<?php

namespace App\Http\Requests\Pin;

use Illuminate\Foundation\Http\FormRequest;

class VerificationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $pinLength = config('custom.default_pin_length');
        return [
            'code' => "required|numeric|digits:$pinLength"
        ];
    }
}
