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
Route::get('catagory', [Nguoidungcontroller::class, 'catagory'])->name('catagory');
Route::get('checkout', [Nguoidungcontroller::class, 'checkout'])->name('checkout');