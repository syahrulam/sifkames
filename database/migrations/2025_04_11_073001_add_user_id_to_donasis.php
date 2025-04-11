<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToDonasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('donasis', function (Blueprint $table) {
            // Menambahkan kolom 'user_id' untuk menyimpan referensi ID pengguna
            $table->unsignedBigInteger('user_id')->after('id');  // Menambahkan kolom 'user_id' setelah kolom 'id'

            // Menambahkan foreign key constraint, jika Anda ingin menambahkan hubungan ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donasis', function (Blueprint $table) {
            // Menghapus kolom 'user_id' jika migrasi dibatalkan
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}
