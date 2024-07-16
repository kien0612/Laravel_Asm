<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DanhMucSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('danh_mucs')->insert([
                'ten_danh_muc' => $faker->name,
                'mo_ta' => $faker->text,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        
        }
    }
}
