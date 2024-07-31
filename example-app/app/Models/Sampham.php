<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampham extends Model
{
    use HasFactory;
  protected  $fillable=[
        'ten_san_pham ',
        'hinh_anh',
        'gia',
        'so_luong',
        'ngay_nhap',
        'mo_ta',
        'trang_thai',
        'id_danh_muc ',
        'created_at',
        'updated_at',
  ];
}