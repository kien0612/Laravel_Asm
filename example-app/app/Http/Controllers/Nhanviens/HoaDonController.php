<?php

namespace App\Http\Controllers\Nhanviens;

use App\Http\Controllers\Controller;
use App\Models\HoaDon;
use App\Models\NguoiDung;
use App\Models\KhuyenMai;
use App\Models\SanPham;
use Illuminate\Http\Request;

class HoaDonController extends Controller
{
    public function index()
    {
        $hoaDons = HoaDon::with(['nguoiDung', 'khuyenMai', 'sanPham'])->get();
        return view('nhanvien.hoa_don.index', compact('hoaDons'));
    }

    public function create()
    {
        $nguoiDungs = NguoiDung::all();
        $khuyenMais = KhuyenMai::all();
        $sanPhams = SanPham::all();
        return view('nhanvien.hoa_don.create', compact('nguoiDungs', 'khuyenMais', 'sanPhams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ngay_dat' => 'required|date',
            'tong_tien' => 'required|numeric',
            'so_luong' => 'required|integer',
            'id_nguoi_dung' => 'required|exists:nguoi_dungs,id_nguoi_dung',
            'id_khuyen_mai' => 'required|exists:khuyen_mais,id_khuyen_mai',
            'id_san_pham' => 'required|exists:san_phams,id_san_pham',
        ]);

        HoaDon::create($request->all());

        return redirect()->route('nhanvien.hoa_don.index')->with('success', 'Hóa đơn được tạo thành công.');
    }

    public function edit($id)
    {
        $hoaDon = HoaDon::findOrFail($id);
        $nguoiDungs = NguoiDung::all();
        $khuyenMais = KhuyenMai::all();
        $sanPhams = SanPham::all();
        return view('nhanvien.hoa_don.edit', compact('hoaDon', 'nguoiDungs', 'khuyenMais', 'sanPhams'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ngay_dat' => 'required|date',
            'tong_tien' => 'required|numeric',
            'so_luong' => 'required|integer',
            'id_nguoi_dung' => 'required|exists:nguoi_dungs,id_nguoi_dung',
            'id_khuyen_mai' => 'required|exists:khuyen_mais,id_khuyen_mai',
            'id_san_pham' => 'required|exists:san_phams,id_san_pham',
        ]);

        $hoaDon = HoaDon::findOrFail($id);
        $hoaDon->update($request->all());

        return redirect()->route('nhanvien.hoa_don.index')->with('success', 'Hóa đơn được cập nhật thành công.');
    }

    public function destroy($id)
    {
        $hoaDon = HoaDon::findOrFail($id);
        $hoaDon->delete();

        return redirect()->route('nhanvien.hoa_don.index')->with('success', 'Hóa đơn đã bị xóa.');
    }
}
