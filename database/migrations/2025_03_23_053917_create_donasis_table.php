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
        $table->string('email_pemdonasi');
        $table->string('telepon_pemdonasi');
        $table->decimal('jumlah_donasi', 15, 2); // Untuk jumlah donasi, bisa menggunakan decimal
        $table->enum('metode_pembayaran', ['transfer_bank', 'ewallet', 'kartu_kredit', 'qris']);
        $table->boolean('anonim')->default(false);
        $table->enum('status', ['pending', 'completed', 'failed'])->default('pending'); // Status transaksi
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('donasis');
}
};