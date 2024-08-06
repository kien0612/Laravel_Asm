<?php

namespace App\Http\Controllers\Api\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhGiaController extends Controller
{
    public function index()
    {
        $danh_gias = DB::table('danh_gias')->get();
        return response()->json($danh_gias);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_nguoi_dung' => ['required', 'exists:nguoi_dungs,id_nguoi_dung'],
            'id_san_pham' => ['required', 'exists:san_phams,id_san_pham'],
            'danh_gia_sao' => ['required', 'integer', 'min:1', 'max:5'],
            'noi_dung' => ['required', 'string'],
            'ngay_danh_gia' => ['required', 'date']
        ]);

        $id = DB::table('danh_gias')->insertGetId([
            'id_nguoi_dung' => $request->id_nguoi_dung,
            'id_san_pham' => $request->id_san_pham,
            'danh_gia_sao' => $request->danh_gia_sao,
            'noi_dung' => $request->noi_dung,
            'ngay_danh_gia' => $request->ngay_danh_gia,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function show($id)
    {
        $danh_gia = DB::table('danh_gias')->where('id_danh_gia', $id)->first();
        if ($danh_gia) {
            return response()->json($danh_gia);
        } else {
            return response()->json(['message' => 'Danh gia not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
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

        return response()->json(['message' => 'Danh gia updated successfully']);
    }

    public function destroy($id)
    {
        DB::table('danh_gias')->where('id_danh_gia', $id)->delete();
        return response()->json(['message' => 'Danh gia deleted successfully']);
    }
}
