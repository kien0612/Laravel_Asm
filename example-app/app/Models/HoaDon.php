<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;

    protected $table = 'hoa_dons';
    protected $primaryKey = 'id_hoa_don';
    public $timestamps = true;

    protected $fillable = [
        'ngay_dat',
        'tong_tien',
        'so_luong',
        'id_nguoi_dung',
        'id_khuyen_mai',
        'id_san_pham',
    ];

    public function nguoiDung()
    {
        return $this->belongsTo(NguoiDung::class, 'id_nguoi_dung');
    }

    public function khuyenMai()
    {
        return $this->belongsTo(KhuyenMai::class, 'id_khuyen_mai');
    }

    public function sanPham()
    {
        return $this->belongsTo(SanPham::class, 'id_san_pham');
    }
}
