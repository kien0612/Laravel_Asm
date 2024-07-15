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
        Schema::create('danh_gias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_nguoi_dung');
            $table->foreign('id_nguoi_dung')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('id_san_pham');
            $table->foreign('id_san_pham')->references('id')->on('san_phams')->onDelete('cascade');
            $table->unsignedInteger('danh_gia_sao');
            $table->text('noi_dung');
            $table->date('ngay_danh_gia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danh_gias');
    }
};
