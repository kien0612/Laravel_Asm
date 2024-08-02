<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class NguoiDung extends Authenticatable
{
    use Notifiable;

    protected $table = 'nguoi_dungs';

    protected $primaryKey = 'id_nguoi_dung';

    protected $fillable = [
        'ten_dang_nhap',
        'mat_khau',
        'ho_ten',
        'email',
        'so_dien_thoai',
        'dia_chi',
        'vai_tro',
    ];

    protected $hidden = [
        'mat_khau',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gioHangs()
    {
        return $this->hasMany('App\Models\GioHang', 'id_nguoi_dung');
    }
    public function hoaDons()
    {
        return $this->hasMany('App\Models\HoaDon', 'id_nguoi_dung');
    }
    
}
