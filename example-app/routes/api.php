<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\DanhMucController;
use App\Http\Controllers\Api\Admin\KhuyenMaiController;
use App\Http\Controllers\Api\Admin\SanPhamController;
use App\Http\Controllers\Api\Admin\BannerMakettingController;
use App\Http\Controllers\Api\Admin\DanhGiaController;
use App\Http\Controllers\Api\Admin\TaiKhoanController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('admin')->group(function () {
    Route::apiResource('danhmuc', DanhMucController::class);
    Route::apiResource('khuyenmai', KhuyenMaiController::class);
    Route::apiResource('sanpham', SanPhamController::class);
    Route::apiResource('banner', BannerMakettingController::class);
    Route::apiResource('danhgia', DanhGiaController::class);
    Route::apiResource('taikhoan', TaiKhoanController::class);
});