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
        Schema::create('thanh_toans', function (Blueprint $table) {
            $table->id('id_thanh_toan')->unique();
            $table->string('phuong_thuc_thanh_toan');
            $table->double('thanh_tien', 10, 2);
            $table->date('ngay_thanh_toan');
            $table->unsignedBigInteger('id_hoa_don');
            $table->foreign('id_hoa_don')->references('id_hoa_don')->on('hoa_dons')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thanh_toans');
    }
};
