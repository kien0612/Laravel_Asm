<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDanhMucRequest extends FormRequest
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
            'ten_danh_muc' => ['required', 'string', 'max:255'],
            'mo_ta' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'ten_danh_muc.required' => 'Tên là bắt buộc.',
            'ten_danh_muc.string' => 'Tên phải là chuỗi ký tự.',
            'ten_danh_muc.max' => 'Tên không được vượt quá 255 ký tự.',
            'mo_ta.required' => 'Mô tả là bắt buộc.',
            'mo_ta.string' => 'Mô tả phải là chuỗi ký tự.',
        ];
    }
}
