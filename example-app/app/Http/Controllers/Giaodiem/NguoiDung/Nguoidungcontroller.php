<?php

namespace App\Http\Controllers\Giaodiem\NguoiDung;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class Nguoidungcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    private $view;

    public function index()
    {
        $sanpham = DB::table('san_phams')->get();
        $banner = DB::table('banner_makettings')->get();
        return view('nguoidung.index', compact('sanpham', 'banner'));
    }
    // public function quickview(string $id_san_pham)
    // {

    //     $sanphams = DB::table('san_phams')->where('id_san_pham', $id_san_pham)->first();
    //     return view('nguoidung.index', compact('sanphams'));
    // }

    public function product()
    {
        $objSp = new SanPham();
        $this->view['listSp'] = $objSp->loadAllDataProductWithPager();
        return view('nguoidung.product', $this->view);
    }


    public function addToCart(SanPham $sanpham, Cart $cart){
        $cart->add($sanpham);
        session()->flash('success', 'Sản phẩm đã được thêm vào giỏ hàng!');
        return redirect()->route('cart');
    }
    public function view(Cart $cart){
        return view('nguoidung.cart', compact('cart'));
    }
    public function deleteCart($id, Cart $cart){
        $cart->delete($id);
        session()->flash('success', 'Sản phẩm đã được xóa khỏi giỏ hàng!');
        return redirect()->route('cart');
    }

    public function checkout()
    {
        return view('nguoidung.checkout');
    }
   
    public function productdetail($id_san_pham)
    {
        $sanpham = DB::table('san_phams')->where('id_san_pham', $id_san_pham)->first();
        return view('nguoidung.productdetail', compact('sanpham'));
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