<?php

namespace App\Http\Requests\User;

use App\Http\Controllers\ResponseTrait;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
            'name'     => [
                'required',
                'string',
            ],
            'birthday' => [
                'required',
                'date_format:Y-m-d',
            ],
            'avatar'   => [
                'nullable',
                'string',
            ],
            'address'  => [
                'nullable',
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
            'email'   => [
                'required',
                Rule::unique(User::class,'email')->ignore($this->email,'email')
            ]
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
