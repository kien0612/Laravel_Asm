<?php

namespace App\Http\Controllers\Api\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerMakettingController extends Controller
{
    public function index()
    {
        $banners = DB::table('banner_makettings')->get();
        return response()->json($banners);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'ten_banner' => ['required', 'string', 'max:255'],
            'hinh_anh' => ['required', 'max:2048'],
            'mo_ta' => ['required']
        ]);

        if ($request->hasFile('hinh_anh')) {
            $filename = $request->file('hinh_anh')->store('Banner', 'public');
        } else {
            $filename = null;
        }

        $id = DB::table('banner_makettings')->insertGetId([
            'ten_banner' => $request->ten_banner,
            'hinh_anh' => $filename,
            'mo_ta' => $request->mo_ta,
        ]);

        return response()->json(['id' => $id], 201);
    }

    public function show($id)
    {
        $banner = DB::table('banner_makettings')->where('id', $id)->first();
        if ($banner) {
            return response()->json($banner);
        } else {
            return response()->json(['message' => 'Banner not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'ten_banner' => ['required', 'string', 'max:255'],
            'hinh_anh' => ['nullable', 'image', 'max:2048'],
            'mo_ta' => ['required']
        ]);

        $banner = DB::table('banner_makettings')->where('id', $id)->first();

        if ($request->hasFile('hinh_anh')) {
            if ($banner->hinh_anh) {
                Storage::disk('public')->delete($banner->hinh_anh);
            }

            $file = $request->file('hinh_anh');
            $filename = time() . '_' . $file->getClientOriginalName();
            $imagePath = $file->storeAs('banner_makettings', $filename, 'public');
        } else {
            $imagePath = $banner->hinh_anh;
        }

        DB::table('banner_makettings')->where('id', $id)->update([
            'ten_banner' => $request->ten_banner,
            'hinh_anh' => $imagePath,
            'mo_ta' => $request->mo_ta,
        ]);

        return response()->json(['message' => 'Banner updated successfully']);
    }

    public function destroy($id)
    {
        DB::table('banner_makettings')->where('id', $id)->delete();
        return response()->json(['message' => 'Banner deleted successfully']);
    }
}
