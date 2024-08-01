<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSanPhamRequest extends FormRequest
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
            'ten_san_pham' => ['required', 'string', 'max:255'],
            // 'hinh_anh' => ['nullable','image','mimes:jpg, png, jpeg','max:2048'],
            'gia' => ['required', 'numeric', 'min:0'],
            'so_luong' => ['required', 'integer', 'min:0'],
            'ngay_nhap' => ['required', 'date'],
            'mo_ta' => ['required', 'string'],
            'trang_thai' => ['nullable', 'boolean'],
            'id_danh_muc' => ['required', 'exists:danh_mucs,id_danh_muc'],
        ];
    }
    public function messages(): array
    {
        return [
            'ten_san_pham.required' => 'Tên sản phẩm là bắt buộc.',
            'ten_san_pham.unique' => 'Tên sản phẩm đã tồn tại.',
            // 'hinh_anh.image' => 'Trường ảnh phải là một tập tin ảnh',
            // 'hinh_anh.mimes' => 'Trường ảnh phải có định dạng jpg, png, hoặc jpeg',
            // 'hinh_anh.max' => 'Trường ảnh không được vượt quá 2MB',
            'gia.required' => 'Giá là bắt buộc.',
            'gia.numeric' => 'Giá phải là số.',
            'so_luong.required' => 'Số lượng là bắt buộc.',
            'so_luong.integer' => 'Số lượng phải là số nguyên.',
            'ngay_nhap.required' => 'Ngày nhập là bắt buộc.',
            'ngay_nhap.date' => 'Ngày nhập không hợp lệ.',
            'mo_ta.required' => 'Mô tả là bắt buộc.',
            'id_danh_muc.required' => 'Danh mục là bắt buộc.',
            'id_danh_muc.exists' => 'Danh mục không tồn tại.',
        ];
    }
}
