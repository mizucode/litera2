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
        Schema::table('posts', function (Blueprint $table) {
            // Menambahkan foreign key ke category_id yang mengacu ke tabel categories
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Menghapus foreign key jika rollback migrasi
            $table->dropForeign(['author_id']);
            $table->dropColumn('author_id');
        });
    }
};
