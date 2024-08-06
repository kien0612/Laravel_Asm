<?php

use App\Http\Controllers\Admins\BannerMakettingController as AdminBannerMakettingController;
use App\Http\Controllers\Admins\DanhmucController;
use App\Http\Controllers\Admins\KhuyenmaiControoller;
use App\Http\Controllers\Admins\SamphamController;
use App\Http\Controllers\Admins\DanhGiaController;
use App\Http\Controllers\Admins\TaikhoanController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\NhanViens\DanhGiaNhanVienController;
use App\Http\Middleware\TrimStrings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Giaodiem\NguoiDung\Nguoidungcontroller;
use App\Http\Controllers\Giaodiem\Admin\Admincontroller;
use App\Http\Controllers\Nhanviens\danhmuccontroller as NhanviensDanhmuccontroller;
use App\Http\Controllers\Nhanviens\danhmucnhanvienController;
use App\Http\Controllers\Nhanviens\BannerMakettingController as NhanvienBannerMakettingController;
use App\Http\Controllers\Nhanviens\ThanhToanController;
use App\Http\Controllers\Nhanviens\GioHangController;
use App\Http\Controllers\Nhanviens\HoaDonController;
use App\Http\Controllers\Nhanviens\SanPhamNhanVienController;
use App\Http\Controllers\Nhanviens\KhuyenMaiNhanVienController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [Nguoidungcontroller::class, 'index'])->name('/');
Route::get('/{id_san_phan}/edit', [Nguoidungcontroller::class, 'quickview'])->name('edit')->where('id_san_pham', '[0-9]+');
// route::get('/book/{id_san_pham}', [Nguoidungcontroller::class, 'addtocart'])->name('addbox.to.cart');
// Route::delete('/delete-cart-product', [Nguoidungcontroller::class, 'deleteProduct'])->name('delete.cart.product');

Route::get('login', [Nguoidungcontroller::class, 'login'])->name('login');
Route::get('product', [Nguoidungcontroller::class, 'product'])->name('product');
Route::get('checkout', [Nguoidungcontroller::class, 'checkout'])->name('checkout');
Route::get('cart', [Nguoidungcontroller::class, 'view'])->name('cart');
Route::get('/add/{sanpham}', [Nguoidungcontroller::class, 'addToCart'])->name('cart.add');
Route::get('/delete/{id}', [Nguoidungcontroller::class, 'deleteCart'])->name('cart.delete');
Route::get('/product/{id_san_pham}', [Nguoidungcontroller::class, 'productdetail'])->name('productdetail');

// Route::get('productdetail', [Nguoidungcontroller::class, 'productdetail'])->name('productdetail');
Route::get('contact', [Nguoidungcontroller::class, 'contact'])->name('contact');
Route::get('404', [Nguoidungcontroller::class, 'a404'])->name('404');
Route::get('defaultpage', [Nguoidungcontroller::class, 'defaultpage'])->name('defaultpage');
Route::get('register', [Nguoidungcontroller::class, 'register'])->name('register');
//
// Route::get('Admin', [Admincontroller::class, 'admin'])->name('admin');

//login checkut
Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('post-login', [AuthenticationController::class, 'postlogin'])->name('postlogin');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::post('postdanhky', [AuthenticationController::class, 'postdanhky'])->name('postdanhky');
Route::get('banner', [AdminBannerMakettingController::class, 'banner'])->name('banner');




//crud danh muc
// Route::resource('danhmuc', DanhmucController::class);
// http://127.0.0.1:8000/admin/danhmuc
route::group(
  [
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' =>'checkAdmin'
  ],
  function () {
    Route::get('admin', [Admincontroller::class, 'admin'])->name('admin');
    Route::resource('danhmuc', DanhmucController::class);
    Route::resource('khuyenmai', KhuyenmaiControoller::class);
    Route::resource('taikhoan', TaikhoanController::class);

    Route::resource('banner', AdminBannerMakettingController::class);
    Route::resource('sampham', SamphamController::class);
    Route::resource('danhgia', DanhGiaController::class);
  }

);

route::group(
  [
    'prefix' => 'nhanvien',
    'as' => 'nhanvien.',
    'middleware' => 'nhanvien'
  ],
  function () {
    route::get('nhanvien',[danhmucnhanvienController::class ,'nhanvien'])->name('nhanvien');
   
    Route::resource('danhmuc', danhmucnhanvienController::class);
    Route::resource('sanpham', SanPhamNhanVienController::class);
    Route::resource('khuyenmai', KhuyenMaiNhanVienController::class);
    Route::resource('danhgia', DanhGiaNhanVienController::class);

    Route::resource('banner', NhanvienBannerMakettingController::class);
    Route::resource('thanh_toan', ThanhToanController::class);
    Route::resource('gio_hang', GioHangController::class);
    Route::resource('hoa_don', HoaDonController::class);
  }
);