<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhGiaController extends Controller
{
    public function index()
    {
        $danh_gias = DB::table('danh_gias')->get();
        return view('admin.danhgia.index', compact('danh_gias'));
    }

    public function create()
    {
        return view('admin.danhgia.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_nguoi_dung' => ['required', 'exists:nguoi_dungs,id_nguoi_dung'],
            'id_san_pham' => ['required', 'exists:san_phams,id_san_pham'],
            'danh_gia_sao' => ['required', 'integer', 'min:1', 'max:5'],
            'noi_dung' => ['required', 'string'],
            'ngay_danh_gia' => ['required', 'date']
        ]);

        DB::table('danh_gias')->insert([
            'id_nguoi_dung' => $request->id_nguoi_dung,
            'id_san_pham' => $request->id_san_pham,
            'danh_gia_sao' => $request->danh_gia_sao,
            'noi_dung' => $request->noi_dung,
            'ngay_danh_gia' => $request->ngay_danh_gia,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('admin.danhgia.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $danh_gia = DB::table('danh_gias')->where('id_danh_gia', $id)->first();
        if (!$danh_gia) {
            return redirect()->route('admin.danhgia.index')->with('error', 'Đánh giá không tồn tại');
        }
        return view('admin.danhgia.edit', compact('danh_gia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_nguoi_dung' => ['required', 'exists:nguoi_dungs,id_nguoi_dung'],
            'id_san_pham' => ['required', 'exists:san_phams,id_san_pham'],
            'danh_gia_sao' => ['required', 'integer', 'min:1', 'max:5'],
            'noi_dung' => ['required', 'string'],
            'ngay_danh_gia' => ['required', 'date']
        ]);

        DB::table('danh_gias')->where('id_danh_gia', $id)->update([
            'id_nguoi_dung' => $request->id_nguoi_dung,
            'id_san_pham' => $request->id_san_pham,
            'danh_gia_sao' => $request->danh_gia_sao,
            'noi_dung' => $request->noi_dung,
            'ngay_danh_gia' => $request->ngay_danh_gia,
            'updated_at' => now()
        ]);

        return redirect()->route('admin.danhgia.index');
    }

    public function destroy($id)
    {
        DB::table('danh_gias')->where('id_danh_gia', $id)->delete();
        return redirect()->route('admin.danhgia.index');
    }
}
