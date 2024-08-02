<?php

namespace App\Http\Controllers\Nhanviens;

use App\Http\Controllers\Controller;
use App\Models\GioHang;
use App\Models\SanPham;
use App\Models\NguoiDung;
use Illuminate\Http\Request;

class GioHangController extends Controller
{
    public function index()
    {
        $gioHangs = GioHang::with('sanPham', 'nguoiDung')->get();
        return view('nhanvien.gio_hang.index', compact('gioHangs'));
    }

    public function create()
    {
        $nguoiDungs = NguoiDung::all();
        $sanPhams = SanPham::all();
        return view('nhanvien.gio_hang.create', compact('nguoiDungs', 'sanPhams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'so_luong' => 'required|integer|min:1',
            'tong_tien' => 'required|numeric',
            'id_nguoi_dung' => 'required|exists:nguoi_dungs,id_nguoi_dung',
            'id_san_pham' => 'required|exists:san_phams,id_san_pham',
        ]);

        GioHang::create($request->all());

        return redirect()->route('nhanvien.gio_hang.index')->with('success', 'Giỏ hàng đã được tạo thành công.');
    }

    public function edit($id)
    {
        $gioHang = GioHang::findOrFail($id);
        $nguoiDungs = NguoiDung::all();
        $sanPhams = SanPham::all();
        return view('nhanvien.gio_hang.edit', compact('gioHang', 'nguoiDungs', 'sanPhams'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'so_luong' => 'required|integer|min:1',
            'tong_tien' => 'required|numeric',
            'id_nguoi_dung' => 'required|exists:nguoi_dungs,id_nguoi_dung',
            'id_san_pham' => 'required|exists:san_phams,id_san_pham',
        ]);

        $gioHang = GioHang::findOrFail($id);
        $gioHang->update($request->all());

        return redirect()->route('nhanvien.gio_hang.index')->with('success', 'Giỏ hàng đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $gioHang = GioHang::findOrFail($id);
        $gioHang->delete();

        return redirect()->route('nhanvien.gio_hang.index')->with('success', 'Giỏ hàng đã được xóa thành công.');
    }
}