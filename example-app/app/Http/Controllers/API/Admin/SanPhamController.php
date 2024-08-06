<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    public function index()
    {
        $san_phams = DB::table('san_phams')->get();
        return response()->json($san_phams);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ten_san_pham' => ['required', 'string', 'max:255'],
            'gia' => ['required', 'numeric'],
            'mo_ta' => ['required'],
            'id_danh_muc' => ['required', 'exists:danh_mucs,id_danh_muc']
        ]);

        $id = DB::table('san_phams')->insertGetId([
            'ten_san_pham' => $request->ten_san_pham,
            'gia' => $request->gia,
            'mo_ta' => $request->mo_ta,
            'id_danh_muc' => $request->id_danh_muc,
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function show($id)
    {
        $san_pham = DB::table('san_phams')->where('id_san_pham', $id)->first();
        if ($san_pham) {
            return response()->json($san_pham);
        } else {
            return response()->json(['message' => 'San pham not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'ten_san_pham' => ['required', 'string', 'max:255'],
            'gia' => ['required', 'numeric'],
            'mo_ta' => ['required'],
            'id_danh_muc' => ['required', 'exists:danh_mucs,id_danh_muc']
        ]);

        DB::table('san_phams')->where('id_san_pham', $id)->update([
            'ten_san_pham' => $request->ten_san_pham,
            'gia' => $request->gia,
            'mo_ta' => $request->mo_ta,
            'id_danh_muc' => $request->id_danh_muc,
        ]);

        return response()->json(['message' => 'San pham updated successfully']);
    }

    public function destroy($id)
    {
        DB::table('san_phams')->where('id_san_pham', $id)->delete();
        return response()->json(['message' => 'San pham deleted successfully']);
    }
}
