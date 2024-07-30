<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SamphamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sampham = DB::table('san_phams')
        ->join('danh_mucs', 'san_phams.id_danh_muc', '=', 'danh_mucs.id_danh_muc')
        ->select('san_phams.*', 'danh_mucs.*')
        ->get();
    //   @dd($sampham);
        return view('admin.Sampham.index', compact('sampham'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $danhmucs= DB::table('danh_mucs')->get();
       
        return view('admin.Sampham.create', compact('danhmucs'));
    }

    /**
     * Store a newly created resource in storage.
     */

     private function uploadFile($file){
        $fileName = time()."_".$file->getClientOriginalName();
        return $file->storeAs('image_products', $fileName, 'public');
     }
     public function store(Request $request  )
     {
        
                $validate = $request->validate([
                    'ten_san_pham' => 'required','string','max:255',
                    'hinh_anh' => 'required|max:2048',
                    'gia' => 'required|numeric|min:0',
                    'so_luong' => 'required|integer|min:0',
                    'ngay_nhap' => 'required|date',
                    'mo_ta' => 'nullable|string',
                    'trang_thai' => 'required',
                    
                ], [
                    'ten_san_pham.required' => 'Tên bị trống',
                    'ten_san_pham.string' => 'Tên phải là chữ',
                    'ten_san_pham.max' => 'Tên quá dài',
            
                    'hinh_anh.required' => 'Hình ảnh bị trống',
                
                    'hinh_anh.max' => 'Kích thước hình ảnh quá lớn (tối đa 2MB)',
            
                    'gia.required' => 'Giá bị trống',
                    'gia.numeric' => 'Giá phải là số',
                    'gia.min' => 'Giá phải lớn hơn hoặc bằng 0',
            
                    'so_luong.required' => 'Số lượng bị trống',
                    'so_luong.integer' => 'Số lượng phải là số nguyên',
                    'so_luong.min' => 'Số lượng phải lớn hơn hoặc bằng 0',
            
                    'ngay_nhap.required' => 'Ngày nhập bị trống',
                    'ngay_nhap.date' => 'Ngày nhập phải là ngày hợp lệ',
            
                    'mo_ta.string' => 'Mô tả phải là chữ',
            
                    'trang_thai.required' => 'Trạng thái bị trống',
                

                    ]);
        //   $data=$request->except('hinh_anh');
        //   if($request->hasFile('hinh_anh')&&$request->file('hinh_anh')->isValid()){
        //     $data['hinh_anh'] = $this->upLoadFile($request->file('hinh_anh'));

        // }
        
        DB::table('san_phams')->insert([
        'ten_san_pham' => $request->input('ten_san_pham'),
        'hinh_anh' => $request->input('hinh_anh'),
        'gia' => $request->input('gia'),
        'so_luong' => $request->input('so_luong'),
        'ngay_nhap' => $request->input('ngay_nhap'),
        'mo_ta' => $request->input('mo_ta'),
        'trang_thai' => $request->input('trang_thai'),
        'id_danh_muc' => $request->input('id_danh_muc')
         ]);
        return redirect()->route('admin.sampham.index')->with('success', 'Cập nhật sản phẩm là xong thành công.');
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
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
    public function destroy(string $id_san_pham)
    {
        DB::table('san_phams')->where('id_san_pham', $id_san_pham)->delete();
        return redirect()->route('admin.sampham.index')->with('success', 'Xóa thành công');
    }
}