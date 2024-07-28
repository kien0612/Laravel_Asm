<?php

namespace App\Http\Controllers\Giaodiem\NguoiDung;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Nguoidungcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('nguoidung.index');
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