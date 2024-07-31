<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;

    protected $table = 'khuyen_mais';
    protected $primaryKey = 'id_khuyen_mai';
    public $timestamps = true;

    protected $fillable = [
        'ten_khuyen_mai',
        'phan_tram_giam_gia',
        'mo_ta',
        'ngay_bat_dau',
        'ngay_ket_thuc',
    ];

    public function hoaDons()
    {
        return $this->hasMany(HoaDon::class, 'id_khuyen_mai');
    }
}
