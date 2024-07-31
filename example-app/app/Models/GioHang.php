<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    use HasFactory;

    protected $table = 'gio_hangs';
    protected $primaryKey = 'id_gio_hang';

    protected $fillable = [
        'so_luong',
        'tong_tien',
        'id_nguoi_dung',
        'id_san_pham',
    ];

    public function nguoiDung()
    {
        return $this->belongsTo('App\Models\NguoiDung', 'id_nguoi_dung');
    }

    public function sanPham()
    {
        return $this->belongsTo('App\Models\SanPham', 'id_san_pham');
    }
}
