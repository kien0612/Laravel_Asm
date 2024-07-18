<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Giaodiem\NguoiDung\Nguoidungcontroller;



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