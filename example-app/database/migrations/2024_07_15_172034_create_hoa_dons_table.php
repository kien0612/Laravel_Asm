<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id('id_hoa_don')->unique();
            $table->date('ngay_dat');
            $table->double('tong_tien', 10, 2);
            $table->unsignedInteger('so_luong');
            $table->unsignedBigInteger('id_nguoi_dung');
            $table->unsignedBigInteger('id_khuyen_mai');
            $table->unsignedBigInteger('id_san_pham');
            $table->timestamps();

            $table->foreign('id_nguoi_dung')->references('id_nguoi_dung')->on('nguoi_dungs')->onDelete('cascade');
            $table->foreign('id_khuyen_mai')->references('id_khuyen_mai')->on('khuyen_mais')->onDelete('cascade');
            $table->foreign('id_san_pham')->references('id_san_pham')->on('san_phams')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};
