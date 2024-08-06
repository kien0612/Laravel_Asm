<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhmucController extends Controller
{
    public function index()
    {
        $danhmuc= DB::table('danh_mucs')->get();
        //  @dd($danhmuc);
        return response()->json($danhmuc);
    }
    public function store($id_danh_muc)
    {
        $danhmuc= DB::table('danh_mucs')->find($id_danh_muc)->get();
        //  @dd($danhmuc);
        return response()->json($danhmuc);
     
    }
}