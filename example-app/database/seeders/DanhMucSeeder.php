<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DanhMucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dữ liệu mẫu danh mục
        $danhMucs = [
            [
                'ten_danh_muc' => 'Danh mục 1',
                'mo_ta' => 'Mô tả danh mục 1',
            ],
            [
                'ten_danh_muc' => 'Danh mục 2',
                'mo_ta' => 'Mô tả danh mục 2',
            ],
            [
                'ten_danh_muc' => 'Danh mục 3',
                'mo_ta' => 'Mô tả danh mục 3',
            ],
        ];

        // Insert dữ liệu vào bảng danh_mucs
        DB::table('danh_mucs')->insert($danhMucs);
    }
}
