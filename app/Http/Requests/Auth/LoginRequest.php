<?php

namespace App\Http\Requests\Auth;

use App\Http\Controllers\ResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    use ResponseTrait;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'email'    => [
                'required',
                'email',
            ],
            'password' => [
                'required',
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'email'    => 'Email',
            'password' => 'Mật khẩu',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute bắt buộc điền',
            'email'    => ':attribute sai định dạng',
        ];
    }
}
