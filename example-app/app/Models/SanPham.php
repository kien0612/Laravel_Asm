<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;

    protected $table = 'san_phams';
    protected $primaryKey = 'id_san_pham';

    protected $fillable = [
        'ten_san_pham',
        'hinh_anh',
        'gia',
        'so_luong',
        'ngay_nhap',
        'mo_ta',
        'trang_thai',
        'id_danh_muc',
    ];

    public function danhMuc()
    {
        return $this->belongsTo('App\Models\DanhMuc', 'id_danh_muc');
    }

    public function gioHangs()
    {
        return $this->hasMany('App\Models\GioHang', 'id_san_pham');
    }
}
