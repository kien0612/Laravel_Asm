<?php

namespace App\Http\Controllers\Nhanviens;

use App\Http\Controllers\Controller;
use App\Models\BannerMaketting;
use Illuminate\Http\Request;

class BannerMakettingController extends Controller
{
    public function index()
    {
     $banners = BannerMaketting::orderBy('created_at', 'desc')->get();
        return view('nhanvien.banner.index', compact('banners'));
    }

    public function create()
    {
        return view('nhanvien.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ten_banner' => 'required|string|max:255',
            'hinh_anh' => 'nullable|image',
            'mo_ta' => 'required|string',
        ]);

        $banner = new BannerMaketting();
        $banner->ten_banner = $request->input('ten_banner');
        $banner->mo_ta = $request->input('mo_ta');

        if ($request->hasFile('hinh_anh')) {
            // Lưu hình ảnh vào thư mục 'public/banner'
            $path = $request->file('hinh_anh')->store('public/banner');
            $banner->hinh_anh = basename($path);
        }

        $banner->save();

        return redirect()->route('nhanvien.banner.index')->with('success', 'Banner created successfully.');
    }

    public function edit($id)
    {
        $banner = BannerMaketting::findOrFail($id);
        return view('nhanvien.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'ten_banner' => 'required|string|max:255',
            'hinh_anh' => 'nullable|image',
            'mo_ta' => 'required|string',
        ]);

        $banner = BannerMaketting::findOrFail($id);
        $banner->ten_banner = $request->input('ten_banner');
        $banner->mo_ta = $request->input('mo_ta');

        if ($request->hasFile('hinh_anh')) {
            // Xóa hình ảnh cũ nếu có
            if ($banner->hinh_anh) {
                $oldImagePath = storage_path('app/public/banner/' . $banner->hinh_anh);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
            
            // Lưu hình ảnh mới vào thư mục 'public/banner'
            $path = $request->file('hinh_anh')->store('public/banner');
            $banner->hinh_anh = basename($path);
        }

        $banner->save();

        return redirect()->route('nhanvien.banner.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy($id)
    {
        $banner = BannerMaketting::findOrFail($id);
        
        // Xóa hình ảnh liên quan nếu có
        if ($banner->hinh_anh) {
            $imagePath = storage_path('app/public/banner/' . $banner->hinh_anh);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $banner->delete();

        return redirect()->route('nhanvien.banner.index')->with('success', 'Banner deleted successfully.');
    }
}
