<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
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
            'name'     => [
                'required',
                'string',
            ],
            'birthday' => [
                'required',
                'date_format:Y-m-d',
            ],
            'avatar'   => [
                'string',
            ],
            'address'  => [
                'string',
            ],
            'weight'   => [
                'required',
                'numeric',
                'min:0',
            ],
            'height'   => [
                'required',
                'numeric',
                'min:0',
            ],
            'gender'   => [
                'required',
                'boolean',
            ],
            'email'    => [
                'required',
                'email',
                Rule::unique(User::class, 'email'),
            ],
            'password' => [
                'required',
                'min:6',
            ],
        ];
    }

    /**
     * @return string[]
     */
    public function attributes(): array
    {
        return [
            'name'     => 'Tên',
            'birthday' => 'Ngày sinh',
            'avatar'   => 'Ảnh đại diện',
            'address'  => 'Địa chỉ',
            'weight'   => 'Cân nặng',
            'height'   => 'Chiều cao',
            'gender'   => 'Giới tính',
            'email'    => 'Email',
            'password' => 'Mật khẩu',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'required'     => ':attribute bắt buộc điền',
            'numeric'      => ':attribute phải là kiểu số',
            'boolean'      => ':attribute phải là kiểu boolean',
            'email'        => ':attribute sai định dạng email',
            'weight.min'   => ':attribute phải là số dương',
            'height.min'   => ':attribute phải là số dương',
            'password.min' => ':attribute cần tối thiểu 6 kí tự',
            'date_format'  => ':attribute yêu cầu định dạng ngày (Y-m-d)',
            'unique'       => ':attribute đã tồn tại',
        ];
    }
}
