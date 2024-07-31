<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    use HasFactory;

    protected $table = 'danh_gias';

    protected $fillable = [
        'id_nguoi_dung',
        'id_san_pham',
        'danh_gia_sao',
        'noi_dung',
        'ngay_danh_gia',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'id_danh_gia';
    public $incrementing = true; 
    protected $keyType = 'int'; 

    public $timestamps = true; 
}
