<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerMaketting extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_banner' ,
        'hinh_anh' ,
        'mo_ta'
    ];

    // public function loadAllDataBannerWithPager() {
    //     $query = BannerMaketting::query()
    //     ->with('')
    // }
    
}
