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
        Schema::create('chitiethoadon', function (Blueprint $table) {
            $table->id(); // Tự động tăng khóa chính
            $table->string('Masanpham');
            $table->integer('Soluongmua');
            $table->bigInteger('Mahoadon')->unsigned();
            $table->boolean('Damua');
            $table->timestamps();

            // Định nghĩa khóa ngoại
            $table->foreign('Mahoadon')->references('Mahoadon')->on('hoadon');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitiethoadon');
    }
};
