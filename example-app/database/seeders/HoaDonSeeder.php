<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $nguoiDungIds = DB::table('nguoi_dungs')->pluck('id_nguoi_dung')->toArray();
        $sanPhamIds = DB::table('san_phams')->pluck('id_san_pham')->toArray();
        $khuyenMaiIds = DB::table('khuyen_mais')->pluck('id_khuyen_mai')->toArray();

        
        for ($i = 0; $i < 10; $i++) {
            $ngayDat = $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d');
            $soLuong = $faker->numberBetween(1, 10);
            $idNguoiDung = $faker->randomElement($nguoiDungIds);
            $idSanPham = $faker->randomElement($sanPhamIds);
            $idKhuyenMai = $faker->randomElement($khuyenMaiIds);
            $tongTien = DB::table('san_phams')->where('id_san_pham', $idSanPham)->value('gia') * $soLuong * (1 - DB::table('khuyen_mais')->where('id_khuyen_mai', $idKhuyenMai)->value('phan_tram_giam_gia') / 100);

            DB::table('hoa_dons')->insert([
                'ngay_dat' => $ngayDat,
                'tong_tien' => $tongTien,
                'so_luong' => $soLuong,
                'id_nguoi_dung' => $idNguoiDung,
                'id_khuyen_mai' => $idKhuyenMai,
                'id_san_pham' => $idSanPham,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
