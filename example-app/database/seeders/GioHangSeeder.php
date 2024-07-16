<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class GioHangSeeder extends Seeder
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

        
        for ($i = 0; $i < 10; $i++) {
            DB::table('gio_hangs')->insert([
                'so_luong' => $faker->numberBetween(1, 10),
                'tong_tien' => $faker->randomFloat(2, 100, 1000),
                'id_nguoi_dung' => $faker->randomElement($nguoiDungIds),
                'id_san_pham' => $faker->randomElement($sanPhamIds),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
