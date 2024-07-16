<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class BannerMakettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Seed banner_makettings table
        for ($i = 0; $i < 10; $i++) {
            DB::table('banner_makettings')->insert([
                'ten_banner' => $faker->word,
                'hinh_anh' => $faker->imageUrl(),
                'mo_ta' => $faker->text,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}