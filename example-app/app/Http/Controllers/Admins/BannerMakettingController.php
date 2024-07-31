<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
// use App\Models\BannerMaketting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerMakettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $banner = DB::table('banner_makettings')->get();
        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   
    public function store(Request $request)
    {
        //
        $validate = $request->validate(
            [
                'ten_banner' => ['required', 'string', 'max:255'],
                'hinh_anh' => ['required', 'max:2048'],
                'mo_ta' => ['required']
            ],
            [
                'ten_banner.required' => 'Tên bị trống',
                'ten_banner.string' => 'Tên phải là chữ',
                'ten_banner.max' => 'Tên quá dài',
                'hinh_anh.required' => 'Hình ảnh bị trống',
                
                'hinh_anh.max' => 'Hình ảnh quá lớn',
                'mo_ta.required' => 'Mô tả bị trống'
            ]
        );
        if ($request->hasFile('hinh_anh')) {
            // Nếu có đẩy hình ảnh
            $filename = $request->file('hinh_anh')->store('Banner', 'public');
        } else {
            $filename = null;
        }
       DB::table('banner_makettings')->insert([ 
        'ten_banner' => $request->ten_banner,
        'hinh_anh' => $filename,
        'mo_ta' => $request->mo_ta,
       ]);
       return redirect()->route('admin.banner.index');
    
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
    public function edit(string $id)
{
    $banner = DB::table('banner_makettings')->where('id', $id)->first();
    return view('admin.banner.edit', compact('banner'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate(
            [
                'ten_banner' => ['required', 'string', 'max:255'],
                'hinh_anh' => ['nullable', 'image', 'max:2048'],
                'mo_ta' => ['required']
            ],
            [
                'ten_banner.required' => 'Tên bị trống',
                'ten_banner.string' => 'Tên phải là chữ',
                'ten_banner.max' => 'Tên quá dài',
                'hinh_anh.image' => 'Tệp tải lên phải là hình ảnh',
                'hinh_anh.max' => 'Hình ảnh quá lớn',
                'mo_ta.required' => 'Mô tả bị trống'
            ]
        );
    
        $banner = DB::table('banner_makettings')->where('id', $id)->first();
    
        if ($request->hasFile('hinh_anh')) {
            // Xóa hình ảnh cũ nếu có
            if ($banner->hinh_anh) {
                Storage::disk('public')->delete($banner->hinh_anh);
            }
    
            // Lưu hình ảnh mới
            $file = $request->file('hinh_anh');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $imagePath = $file->storeAs('uploads/banner_makettings', $fileName, 'public');
        } else {
            $imagePath = $banner->hinh_anh;
        }
    
        DB::table('banner_makettings')->where('id', $id)->update([
            'ten_banner' => $request->ten_banner,
            'hinh_anh' => $imagePath,
            'mo_ta' => $request->mo_ta,
        ]);
    
        return redirect()->route('admin.banner.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        DB::table('banner_makettings')->where('id', $id)->delete();
        return redirect()->back();
    }
}
