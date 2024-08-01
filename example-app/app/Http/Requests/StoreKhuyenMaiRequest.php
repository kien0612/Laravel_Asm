<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKhuyenMaiRequest extends FormRequest
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
            'ten_khuyen_mai' => ['required', 'string', 'max:100'],
            'phan_tram_giam_gia' => ['required', 'numeric', 'between:0,100'],
            'mo_ta' => ['nullable', 'string'],
            'ngay_bat_dau' => ['required', 'date'],
            'ngay_ket_thuc' => ['required', 'date', 'after_or_equal:ngay_bat_dau'],
        ];
    }

    public function messages(): array
    {
        return [
            'ten_khuyen_mai.required' => 'Tên khuyến mãi là bắt buộc.',
            'ten_khuyen_mai.string' => 'Tên khuyến mãi phải là chuỗi ký tự.',
            'ten_khuyen_mai.max' => 'Tên khuyến mãi không được vượt quá 100 ký tự.',
            'phan_tram_giam_gia.required' => 'Phần trăm giảm giá là bắt buộc.',
            'phan_tram_giam_gia.numeric' => 'Phần trăm giảm giá phải là số.',
            'phan_tram_giam_gia.between' => 'Phần trăm giảm giá phải từ 0 đến 100.',
            'ngay_bat_dau.required' => 'Ngày bắt đầu là bắt buộc.',
            'ngay_ket_thuc.required' => 'Ngày kết thúc là bắt buộc.',
            'ngay_ket_thuc.after_or_equal' => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
        ];
    }
}
