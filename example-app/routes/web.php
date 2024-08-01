<?php

use App\Http\Controllers\Admins\DanhmucController;
use App\Http\Controllers\Admins\KhuyenmaiControoller;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Nhanviens\SanPhamNhanVienController;
use App\Http\Middleware\TrimStrings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Giaodiem\NguoiDung\Nguoidungcontroller;
use App\Http\Controllers\Giaodiem\Admin\Admincontroller;
use App\Http\Controllers\Giaodien\Nhanvien\nhanviencontroller;
use App\Http\Controllers\Nhanviens\danhmuccontroller as NhanviensDanhmuccontroller;
use App\Http\Controllers\Nhanviens\danhmucnhanvienController;
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
Route::get('login', [Nguoidungcontroller::class, 'login'])->name('login');
Route::get('product', [Nguoidungcontroller::class, 'product'])->name('product');
Route::get('checkout', [Nguoidungcontroller::class, 'checkout'])->name('checkout');
Route::get('cart', [Nguoidungcontroller::class, 'cart'])->name('cart');
Route::get('productdetail', [Nguoidungcontroller::class, 'productdetail'])->name('productdetail');
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





//crud danh muc
// Route::resource('danhmuc', DanhmucController::class);
// http://127.0.0.1:8000  
route::group(
  [
    'prefix'=>'admin',
    'as'=>'admin.',
    'middleware' =>'checkAdmin'
  ], function(){
    Route::get('admin', [Admincontroller::class, 'admin'])->name('admin');
    Route::resource('danhmuc', DanhmucController::class);
    Route::resource('khuyenmai', KhuyenmaiControoller::class);
  }
    
);

route::group(
  [
    'prefix' => 'nhanvien',
    'as' => 'nhanvien.',
    'middleware' => 'checkAdmin'
],
function () {
    // Route để truy cập trang chính của nhân viên
    Route::get('/', [danhmucnhanvienController::class, 'nhanvien'])->name('index');

    // Route để truy cập danh sách danh mục dưới nhân viên
    Route::get('danhmuc', [danhmucnhanvienController::class, 'index'])->name('danhmuc.index');

    // Route để hiển thị biểu mẫu tạo danh mục mới
    Route::get('danhmuc/create', [danhmucnhanvienController::class, 'create'])->name('danhmuc.create');

    // // Route để lưu trữ danh mục mới
    Route::post('danhmuc', [danhmucnhanvienController::class, 'store'])->name('danhmuc.store');

    // // Route để hiển thị thông tin chi tiết của một danh mục cụ thể
    // Route::get('danhmuc/{id}', [danhmucnhanvienController::class, 'show'])->name('danhmuc.show');

    // // Route để hiển thị biểu mẫu chỉnh sửa một danh mục cụ thể
    Route::get('danhmuc/{id}/edit', [danhmucnhanvienController::class, 'edit'])->name('danhmuc.edit');

    // // Route để cập nhật một danh mục cụ thể
    Route::put('danhmuc/{id}', [danhmucnhanvienController::class, 'update'])->name('danhmuc.update');

    // // Route để xóa một danh mục cụ thể
    Route::delete('danhmuc/{id}', [danhmucnhanvienController::class, 'destroy'])->name('danhmuc.destroy');
}

);

route::group(
  [
    'prefix' => 'nhanvien',
    'as' => 'nhanvien.',
    'middleware' => 'checkAdmin'
],
function () {
    // Route để truy cập trang chính của nhân viên
    Route::get('/', [SanPhamNhanVienController::class, 'nhanvien'])->name('index');

    // Route để truy cập danh sách danh mục dưới nhân viên
    Route::get('sanpham', [SanPhamNhanVienController::class, 'index'])->name('sanpham.index');

    // Route để hiển thị biểu mẫu tạo danh mục mới
    Route::get('sanpham/create', [SanPhamNhanVienController::class, 'create'])->name('sanpham.create');

    // // Route để lưu trữ danh mục mới
    Route::post('sanpham', [SanPhamNhanVienController::class, 'store'])->name('sanpham.store');

    // // Route để hiển thị biểu mẫu chỉnh sửa một danh mục cụ thể
    Route::get('sanpham/{id}/edit', [SanPhamNhanVienController::class, 'edit'])->name('sanpham.edit');

    // // Route để cập nhật một danh mục cụ thể
    Route::put('sanpham/{id}', [SanPhamNhanVienController::class, 'update'])->name('sanpham.update');

    // // Route để xóa một danh mục cụ thể
    Route::delete('sanpham/{id}', [SanPhamNhanVienController::class, 'destroy'])->name('sanpham.destroy');
}

);

route::group(
  [
    'prefix' => 'nhanvien',
    'as' => 'nhanvien.',
    // 'middleware' => 'checkAdmin'
],
function () {
    // Route để truy cập trang chính của nhân viên
    Route::get('/', [KhuyenMaiNhanVienController::class, 'nhanvien'])->name('index');

    // Route để truy cập danh sách danh mục dưới nhân viên
    Route::get('khuyenmai', [KhuyenMaiNhanVienController::class, 'index'])->name('khuyenmai.index');

    // Route để hiển thị biểu mẫu tạo danh mục mới
    Route::get('khuyenmai/create', [KhuyenMaiNhanVienController::class, 'create'])->name('khuyenmai.create');

    // // Route để lưu trữ danh mục mới
    Route::post('khuyenmai', [KhuyenMaiNhanVienController::class, 'store'])->name('khuyenmai.store');

    // // Route để hiển thị biểu mẫu chỉnh sửa một danh mục cụ thể
    Route::get('khuyenmai/{id}/edit', [KhuyenMaiNhanVienController::class, 'edit'])->name('khuyenmai.edit');

    // // Route để cập nhật một danh mục cụ thể
    Route::put('khuyenmai/{id}', [KhuyenMaiNhanVienController::class, 'update'])->name('khuyenmai.update');

    // // Route để xóa một danh mục cụ thể
    Route::delete('khuyenmai/{id}', [KhuyenMaiNhanVienController::class, 'destroy'])->name('khuyenmai.destroy');
}

)->withoutMiddleware(TrimStrings::class);