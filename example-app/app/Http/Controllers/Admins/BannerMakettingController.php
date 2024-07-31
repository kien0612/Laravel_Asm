<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\BannerMaketting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    private function uploadFile($file){
        $fileName = time()."_".$file->getClientOriginalName();
        return $file->storeAs('hinh_anh_banners', $fileName, 'public');
    }
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
            $imagePath = $this->uploadFile($request->file('hinh_anh'));
        }
       DB::table('banner_makettings')->insert([ 
        'ten_banner' => $request->ten_banner,
        'hinh_anh' => $imagePath,
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
