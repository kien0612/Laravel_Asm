<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class KhuyenMaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $ngayBatDau = $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d');
            $ngayKetThuc = $faker->dateTimeBetween($ngayBatDau, '+1 month')->format('Y-m-d');

            DB::table('khuyen_mais')->insert([
                'ten_khuyen_mai' => $faker->sentence(3),
                'phan_tram_giam_gia' => $faker->randomFloat(2, 5, 50),
                'mo_ta' => $faker->text,
                'ngay_bat_dau' => $ngayBatDau,
                'ngay_ket_thuc' => $ngayKetThuc,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}