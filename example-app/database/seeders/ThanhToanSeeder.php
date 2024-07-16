<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ThanhToanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $hoaDonIds = DB::table('hoa_dons')->pluck('id_hoa_don')->toArray();

        
        for ($i = 0; $i < 10; $i++) {
            $ngayThanhToan = $faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d');

            DB::table('thanh_toans')->insert([
                'phuong_thuc_thanh_toan' => $faker->creditCardType,
                'thanh_tien' => $faker->randomFloat(2, 100, 1000),
                'ngay_thanh_toan' => $ngayThanhToan,
                'id_hoa_don' => $faker->randomElement($hoaDonIds),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
