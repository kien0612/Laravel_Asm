<?php

namespace App\Http\Controllers\Giaodiem\NguoiDung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class Nguoidungcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sanpham=DB::table('san_phams')->get();
       
       return view('nguoidung.index' , compact('sanpham'));
    }
    public function quickview(string $id_san_pham)
    {
        
        $sanphams = DB::table('san_phams')->where('id_san_pham', $id_san_pham)->first();
        return view('nguoidung.index', compact('sanphams'));
    }
    /**
     * Show the form for creating a new resource.
     */
 
    public function product()
    {
        return view('nguoidung.product');
    }
    public function checkout()
    {
        return view('nguoidung.checkout');
    }
    public function cart()
    {
        return view('nguoidung.cart');
    }
    public function productdetail()
    {
        return view('nguoidung.productdetail');
    }
    public function contact()
    {
        return view('nguoidung.contact');
    }
    public function a404()
    {
        return view('nguoidung.404');
    }
    public function defaultpage()
    {
        return view('nguoidung.defaultpage');
    }
    public function register()
    {
        return view('nguoidung.register');
    }
}