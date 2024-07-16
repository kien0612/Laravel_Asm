<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class DanhGiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Get IDs of users and products for foreign key references
        $nguoiDungIds = DB::table('nguoi_dungs')->pluck('id_nguoi_dung')->toArray();
        $sanPhamIds = DB::table('san_phams')->pluck('id_san_pham')->toArray();

        // Seed danh_gias table
        for ($i = 0; $i < 10; $i++) {
            $ngayDanhGia = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d');

            DB::table('danh_gias')->insert([
                'id_nguoi_dung' => $faker->randomElement($nguoiDungIds),
                'id_san_pham' => $faker->randomElement($sanPhamIds),
                'danh_gia_sao' => $faker->numberBetween(1, 5),
                'noi_dung' => $faker->text,
                'ngay_danh_gia' => $ngayDanhGia,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
