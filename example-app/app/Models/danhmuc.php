<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
    use HasFactory;
    protected $fillable=[
      'id_danh_muc',
      'ten_danh_muc',
      'mo_ta',
      'created_at',
      'updated_at' 
    ];
    
}