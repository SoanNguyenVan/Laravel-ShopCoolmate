<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            // 'city' => 'required',
            // 'district' => 'required',
            // 'ward' => 'required',
            'address' => 'required',
            // 'note'=> 'required',
        ];
    }
    public function messages(): array
    {
    return [
        'name.required' => 'Tên là thông tin bắt buộc',
        'phone.required' => 'Số điện thoại là thông tin bắt buộc',
        'email.required' => 'Email là thông tin bắt buộc',
        'address.required' => 'Địa chỉ là thông tin bắt buộc',
    ];
    }
}
