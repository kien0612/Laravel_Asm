<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'san_phams';
    protected $primaryKey = 'id_san_pham'; // Đặt cột khóa chính tùy chỉnh
    public $incrementing = true; // Nếu id_danh_muc là kiểu auto-increment
    protected $keyType = 'int'; // Kiểu dữ liệu của khóa chính

    protected $fillable = [
        'id_san_pham',
        'ten_san_pham',
        'hinh_anh',
        'gia',
        'so_luong',
        'ngay_nhap',
        'mo_ta',
        'trang_thai',
        'id_danh_muc',
        'created_at',
        'updated_at'
    ];

    public function listDanhMuc()
    {
        return $this->belongsTo(danhmuc::class, 'id_danh_muc');
    }
    public function loadAllDataProductWithPager()
    {
        // ORM
        return self::select('san_phams.*', 'danh_mucs.name as ten_danh_muc')
            ->join('danh_mucs', 'san_phams.id_danh_muc', '=', 'danh_mucs.id_danh_muc')
            ->with('listDanhMuc')
            ->latest('id_danh_muc')
            ->paginate(10);

    }
    public function insertDataSanPham($params)
    {
        $params['status'] = 1;
        $params['created_at'] = date('Y-m-d H:i:s');
        $res = SanPham::query()->create($params);
        return $res;
    }

    public function loadIdDataSanPham($id)
    {
        $query = SanPham::query()->find($id);
        return $query;
    }

    public function deleteDataSanPham($id)
    {
        $query = SanPham::query()
            ->find($id)
            ->delete();
        return $query;
    }

    public function upadateDataSanPham($params, $id)
    {
        $params['updated_at'] = date('Y-m-d H:i:s');
        $res = SanPham::query()->find($id)->update($params);
        return $res;
    }
}
