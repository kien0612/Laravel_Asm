<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhuyenMai extends Model
{
    use HasFactory;

    protected $table = 'khuyen_mais';
    protected $primaryKey = 'id_khuyen_mai';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'ten_khuyen_mai',
        'phan_tram_giam_gia',
        'mo_ta',
        'ngay_bat_dau',
        'ngay_ket_thuc',
    ];

    public function loadAllDataKhuyenMai()
    {
        return self::all();
    }

    public function loadIdDataKhuyenMai($id)
    {
        return self::find($id);
    }

    public function deleteDataKhuyenMai($id)
    {
        return self::find($id)->delete();
    }

    public function insertDataKhuyenMai($params)
    {
        return self::create($params);
    }

    public function updateDataKhuyenMai($params, $id)
    {
        return self::find($id)->update($params);
    }
}
