<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class NguoiDungSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('nguoi_dungs')->insert([
                'ten_dang_nhap' => $faker->name,
                'mat_khau' => Hash::make('mat_khau'),
                'ho_ten' => $faker->name,
                'email' => $faker->email,
                'so_dien_thoai' => $faker->numerify('0#########'), // Tạo số điện thoại ngẫu nhiên có 10 chữ số
                'dia_chi' => $faker->address,
                'vai_tro' => $faker->randomElement(['admin', 'nhan_vien', 'khach_hang']),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
