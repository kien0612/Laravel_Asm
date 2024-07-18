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
        Schema::create('banner_makettings', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('ten_banner');
            $table->string('hinh_anh')->nullable(); 
            $table->text('mo_ta');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_makettings');
    }
};
