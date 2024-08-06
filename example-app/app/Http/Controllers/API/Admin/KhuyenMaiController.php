<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhuyenMaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $khuyenmai =DB::table('khuyen_mais')->get();
        // @dd($khuyenmai);
        return view('admin.khuyenmai.index', compact('khuyenmai'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.khuyenmai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'ten_khuyen_mai' => ['required'],
                'phan_tram_giam_gia' => ['numeric', 'min:0', 'max:100'],
                'mo_ta' => ['nullable', 'string'],
                'ngay_bat_dau' => ['required', 'date'],
                'ngay_ket_thuc' => ['required', 'date', 'after_or_equal:ngay_bat_dau'],
            ],
            [
                'ten_khuyen_mai.required' => 'Tên khuyến mại là bắt buộc.',
                'phan_tram_giam_gia.numeric' => 'Phần trăm giảm giá phải là số.',
                'phan_tram_giam_gia.min' => 'Phần trăm giảm giá không được nhỏ hơn 0.',
                'phan_tram_giam_gia.max' => 'Phần trăm giảm giá không được lớn hơn 100.',
                'ngay_bat_dau.required' => 'Ngày bắt đầu là bắt buộc.',
                'ngay_bat_dau.date' => 'Ngày bắt đầu phải là ngày hợp lệ.',
                'ngay_ket_thuc.required' => 'Ngày kết thúc là bắt buộc.',
                'ngay_ket_thuc.date' => 'Ngày kết thúc phải là ngày hợp lệ.',
                'ngay_ket_thuc.after_or_equal' => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
            ]
        );
       DB::table('khuyen_mais')->insert([
         'ten_khuyen_mai' => $request->ten_khuyen_mai,
         'phan_tram_giam_gia' => $request->phan_tram_giam_gia,
         'mo_ta' => $request->mo_ta,
         'ngay_bat_dau' => $request->ngay_bat_dau,
         'ngay_ket_thuc' => $request->ngay_ket_thuc,
         'created_at' => date('Y-m-d H:i:s'),
         'updated_at' => date('Y-m-d H:i:s'),

        ]);
        return redirect()->route('admin.khuyenmai.index')->with('success', 'Thêm khuyến mại thành công.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_khuyen_mai)
    {
        $khuyenmai= DB::table('khuyen_mais')->where('id_khuyen_mai', $id_khuyen_mai)->first();

       return view('admin.khuyenmai.edit', compact('khuyenmai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_khuyen_mai)
    {

        $validated = $request->validate(
            [
                'ten_khuyen_mai' => ['required'],
                'phan_tram_giam_gia' => ['numeric', 'min:0', 'max:100'],
                'mo_ta' => ['nullable', 'string'],
                'ngay_bat_dau' => ['required', 'date'],
                'ngay_ket_thuc' => ['required', 'date', 'after_or_equal:ngay_bat_dau'],
            ],
            [
                'ten_khuyen_mai.required' => 'Tên khuyến mại là bắt buộc.',
                'phan_tram_giam_gia.numeric' => 'Phần trăm giảm giá phải là số.',
                'phan_tram_giam_gia.min' => 'Phần trăm giảm giá không được nhỏ hơn 0.',
                'phan_tram_giam_gia.max' => 'Phần trăm giảm giá không được lớn hơn 100.',
                'ngay_bat_dau.required' => 'Ngày bắt đầu là bắt buộc.',
                'ngay_bat_dau.date' => 'Ngày bắt đầu phải là ngày hợp lệ.',
                'ngay_ket_thuc.required' => 'Ngày kết thúc là bắt buộc.',
                'ngay_ket_thuc.date' => 'Ngày kết thúc phải là ngày hợp lệ.',
                'ngay_ket_thuc.after_or_equal' => 'Ngày kết thúc phải sau hoặc bằng ngày bắt đầu.',
            ]
        );

        DB::table('khuyen_mais')->where('id_khuyen_mai', $id_khuyen_mai)->update([
            'ten_khuyen_mai' => $request->ten_khuyen_mai,
            'phan_tram_giam_gia' => $request->phan_tram_giam_gia,
            'mo_ta' => $request->mo_ta,
            'ngay_bat_dau' => $request->ngay_bat_dau,
            'ngay_ket_thuc' => $request->ngay_ket_thuc,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('admin.khuyenmai.index')->with('success', 'Cập nhật khuyến mại thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_khuyen_mai)
    {
        DB::table('khuyen_mais')->where('id_khuyen_mai', $id_khuyen_mai)->delete();
        return redirect()->back()->with('success', 'Xóa khuyến mại thành công.');
    }
}
