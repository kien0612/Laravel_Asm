<?php

namespace App\Http\Controllers\Giaodiem\NguoiDung;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
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


    public function addtocart(string $id_san_pham)
    {
        $sanpham = DB::table('san_phams')->where('id_san_pham', $id_san_pham)->first();
        $cart = session()->get('', []);
     
    
        if (isset($cart[$id_san_pham])) {
            $cart[$id_san_pham]['so_luong']++;
        } else {
            $cart[$id_san_pham] = [
                'ten_san_pham' => $sanpham->ten_san_pham,
                'gia' => $sanpham->gia,
                'so_luong' => 1,
                'hinh_anh' => $sanpham->hinh_anh
            ];
        }
       
        session()->put('cart', $cart);
        // dd($cart); // Uncomment for debugging if needed
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }

    public function deleteProduct(Request $request)
    {
        if($request->id_san_pham) {
            $cart = session()->get('gio_hangs');
            if(isset($cart[$request->id_san_pham])) {
                unset($cart[$request->id_san_pham]);
                session()->put('gio_hangs', $cart);
            }
            session()->flash('success', 'Sản phẩm đã được xóa thành công.');
        }
    
        return response()->json(['success' => true]);
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