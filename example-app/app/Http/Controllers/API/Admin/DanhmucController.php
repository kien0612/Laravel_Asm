<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhmucController extends Controller
{
    public function index()
    {
        $danhmucs = DB::table('danh_mucs')->get();
        return response()->json($danhmucs);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ten_danh_muc' => ['required', 'string', 'max:255'],
            'mo_ta' => ['required']
        ]);

        $id = DB::table('danh_mucs')->insertGetId([
            'ten_danh_muc' => $request->ten_danh_muc,
            'mo_ta' => $request->mo_ta,
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function show($id)
    {
        $danhmuc = DB::table('danh_mucs')->where('id_danh_muc', $id)->first();
        if ($danhmuc) {
            return response()->json($danhmuc);
        } else {
            return response()->json(['message' => 'Danh muc not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'ten_danh_muc' => ['required', 'string', 'max:255'],
            'mo_ta' => ['required']
        ]);

        DB::table('danh_mucs')->where('id_danh_muc', $id)->update([
            'ten_danh_muc' => $request->ten_danh_muc,
            'mo_ta' => $request->mo_ta,
        ]);

        return response()->json(['message' => 'Danh muc updated successfully']);
    }

    public function destroy($id)
    {
        DB::table('danh_mucs')->where('id_danh_muc', $id)->delete();
        return response()->json(['message' => 'Danh muc deleted successfully']);
    }
}
