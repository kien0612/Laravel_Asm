<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khuyenmai extends Model
{
    use HasFactory;
    protected $fillable=[
        'ten_khuyen_mai',
        'phan_tram_giam_gia',
        'mo_ta',
        'ngay_bat_dau',
        'ngay_ket_thuc',
        'created_at',
        'updated_at' 
    ];
}