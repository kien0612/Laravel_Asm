<?php

namespace Database\Seeders;

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
            HoaDonSeeder::class,
            KhuyenMaiSeeder::class,
            ThanhToanSeeder::class,
            GioHangSeeder::class,
        ]);
    }
}
