<?php

namespace App\Http\Controllers\Nhanviens;

use App\Http\Controllers\Controller;
use App\Models\ThanhToan;
use Illuminate\Http\Request;

class ThanhToanController extends Controller
{
    public function index()
    {
        $thanhToans = ThanhToan::all();
        return view('nhanvien.thanh_toan.index', compact('thanhToans'));
    }

    public function create()
    {
        return view('nhanvien.thanh_toan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'phuong_thuc_thanh_toan' => 'required|string|max:255',
            'thanh_tien' => 'required|numeric',
            'ngay_thanh_toan' => 'required|date',
            'id_hoa_don' => 'required|exists:hoa_dons,id_hoa_don',
        ]);

        ThanhToan::create($request->all());

        return redirect()->route('nhanvien.thanh_toan.index')->with('success', 'Thanh toán đã được tạo thành công.');
    }

    public function edit($id)
    {
        $thanhToan = ThanhToan::findOrFail($id);
        return view('nhanvien.thanh_toan.edit', compact('thanhToan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'phuong_thuc_thanh_toan' => 'required|string|max:255',
            'thanh_tien' => 'required|numeric',
            'ngay_thanh_toan' => 'required|date',
            'id_hoa_don' => 'required|exists:hoa_dons,id_hoa_don',
        ]);

        $thanhToan = ThanhToan::findOrFail($id);
        $thanhToan->update($request->all());

        return redirect()->route('nhanvien.thanh_toan.index')->with('success', 'Thanh toán đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $thanhToan = ThanhToan::findOrFail($id);
        $thanhToan->delete();

        return redirect()->route('nhanvien.thanh_toan.index')->with('success', 'Thanh toán đã được xóa thành công.');
    }
}
