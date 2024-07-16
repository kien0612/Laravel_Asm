<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $danhMucIds = DB::table('danh_mucs')->pluck('id_danh_muc')->toArray();
        
        for ($i = 0; $i < 10; $i++) {
            $tenSanPham = $faker->unique()->sentence($nbWords = 6, $variableNbWords = true);
            
            DB::table('san_phams')->insert([
                
                'ten_san_pham' => $tenSanPham,
                'hinh_anh' => $faker->imageUrl,
                'gia' => $faker->randomFloat(2, 1000, 10000),
                'so_luong' => $faker->numberBetween(1, 100),
                'ngay_nhap' => $faker->date,
                'mo_ta' => $faker->text,
                'trang_thai' => $faker->boolean,
                'id_danh_muc' => $faker->randomElement($danhMucIds),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
