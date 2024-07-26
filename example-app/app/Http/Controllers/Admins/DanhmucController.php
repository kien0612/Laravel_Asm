<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\danhmuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      public function index()
    {
        $danhmuc= DB::table('danh_mucs')->get();
        //  @dd($danhmuc);
      return view('admin.danhmuc.index', compact('danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.danhmuc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate(
            [
            'ten_danh_muc'=>['required','string','max:255'],
            'mo_ta'=>['required']
        ],
        [
            'ten_danh_muc.required' => 'Tên bị trống',
            'ten_danh_muc.string' => 'Tên phải là chữ',
            'ten_danh_muc.max' => 'Tên quá dài',

            'mo_ta.required' => 'Mô tả bị trống',

            
        ]);
        DB::table('danh_mucs')->insert([
            'ten_danh_muc' => $request->ten_danh_muc,
           'mo_ta' => $request->mo_ta,
        ]);
        return redirect()->route('danhmuc.index');
     
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
    public function edit(string $id_danh_muc)
    {
        $danhmuc= DB::table('danh_mucs')->where('id_danh_muc', $id_danh_muc)->first();
      
        return view('admin.danhmuc.edit', compact('danhmuc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_danh_muc)
    {
        $validated= $request->validate(
            [
            'ten_danh_muc'=>['required','string','max:255'],
            'mo_ta'=>['required']
        ],
        [
            'ten_danh_muc.required' => 'Tên bị trống',
            'ten_danh_muc.string' => 'Tên phải là chữ',
            'ten_danh_muc.max' => 'Tên quá dài',

            'mo_ta.required' => 'Mô tả bị trống',

            
        ]);
        DB::table('danh_mucs')->where('id_danh_muc', $id_danh_muc)->update([
            'ten_danh_muc' => $request->ten_danh_muc,
           'mo_ta' => $request->mo_ta,
        ]);
        return redirect()->route('danhmuc.index');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_danh_muc)
    {
       DB::table('danh_mucs')->where('id_danh_muc', $id_danh_muc)->delete();
       return redirect()->back();
}
}