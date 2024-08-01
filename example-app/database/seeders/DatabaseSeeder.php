<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
     public function run(): void
     {
          $this->call([
              DanhMucSeeder::class,
              SanPhamSeeder::class,
              NguoiDungSeeder::class,
              BannerMakettingSeeder::class,
              DanhGiaSeeder::class,
              KhuyenMaiSeeder::class,
              HoaDonSeeder::class,
              ThanhToanSeeder::class,
              GioHangSeeder::class,
              
          ]);
          $this->call(UsersTableSeeder::class);

        
        
       
     }   
  
}