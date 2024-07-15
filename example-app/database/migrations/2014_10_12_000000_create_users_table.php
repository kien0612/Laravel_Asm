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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ten_dang_nhap',50)->unique();
            $table->string('mat_khau');
            $table->string('ho_ten')->nullable();
            $table->string('email')->unique();
            $table->string('so_dien_thoai', 10)->nullable();
            $table->text('dia_chi')->nullable();
            $table->enum('vai_tro', ['admin', 'nhan_vien', 'khach_hang'])->default('khach_hang');
            $table->rememberToken();
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
