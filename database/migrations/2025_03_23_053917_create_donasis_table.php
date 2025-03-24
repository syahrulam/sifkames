<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('donasis', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pemdonasi');
        $table->decimal('jumlah_donasi', 15, 2); // Untuk jumlah donasi, bisa menggunakan decimal
        $table->enum('status', ['pending', 'completed', 'failed'])->default('pending'); // Status transaksi
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('donasis');
}
};