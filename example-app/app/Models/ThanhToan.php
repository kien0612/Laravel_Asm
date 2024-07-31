<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThanhToan extends Model
{
    use HasFactory;

    protected $table = 'thanh_toans';

    protected $primaryKey = 'id_thanh_toan';

    protected $fillable = [
        'phuong_thuc_thanh_toan',
        'thanh_tien',
        'ngay_thanh_toan',
        'id_hoa_don',
    ];
}
