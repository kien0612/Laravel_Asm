<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Tạo cột id tự tăng
            $table->string('name'); // Tạo cột name
            $table->string('email')->unique(); // Tạo cột email và đảm bảo giá trị là duy nhất
            $table->timestamp('email_verified_at')->nullable(); // Tạo cột email_verified_at có thể null
            $table->string('password'); // Tạo cột password
            $table->string('so_dien_thoai', 10)->nullable();
            $table->text('dia_chi')->nullable();
            $table->enum('vai_tro', ['1', '2', '3'])->default('3')->comment('1: Admin, 2: Nhanvien, 3: khachhanh');
            
            $table->rememberToken(); // Tạo cột remember_token
            $table->timestamps(); // Tạo các cột created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); // Xóa bảng users nếu tồn tại
    }
}