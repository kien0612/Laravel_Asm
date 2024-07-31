<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
  use HasFactory;
  protected $table = 'danh_mucs';
  protected $primaryKey = 'id_danh_muc'; // Đặt cột khóa chính tùy chỉnh
  public $incrementing = true; // Nếu id_danh_muc là kiểu auto-increment
  protected $keyType = 'int'; // Kiểu dữ liệu của khóa chính


  protected $fillable = [
    'id_danh_muc',
    'ten_danh_muc',
    'mo_ta',
    'created_at',
    'updated_at'
  ];

  public function loadAllDataDanhMuc()
  {
    $query = danhmuc::query()->get();
    return $query;
  }

  public function loadIdDataDanhMuc($id)
  {
    $query = danhmuc::query()->find($id);
    return $query;
  }

  public function deleteDataDanhMuc($id)
  {
    $query = danhmuc::query()
      ->find($id)
      ->delete();
    return $query;
  }

  public function insertDataDanhMuc($params)
  {
    // $params['status'] = 1;
    // $params['created_at'] = now();
    // $res = danhmuc::query()->create($params);
    // return $res;
    return danhmuc::create($params);
  }

  public function updateDataDanhMuc($params, $id){
    $params['updated_at'] = now();
    $res = danhmuc::query()->find($id)->update($params);
    return $res;
}

}