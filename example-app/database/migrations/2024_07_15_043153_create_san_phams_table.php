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
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id('id_san_pham')->unique();
            $table->string('ten_san_pham')->unique();
            $table->string('hinh_anh')->nullable();  
            $table->double('gia', 10, 2);
            $table->unsignedInteger('so_luong'); 
            $table->date('ngay_nhap');
            $table->text('mo_ta');
            $table->boolean('trang_thai')->default(true);
            $table->unsignedBigInteger('id_danh_muc');
            $table->foreign('id_danh_muc')->references('id_danh_muc')->on('danh_mucs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_phams');
    }
};
