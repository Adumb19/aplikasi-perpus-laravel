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
        Schema::create('borrower-details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_peminjam');
            $table->string('id_buku');
            $table->string('tgl_pinjam');
            $table->string('tgl_kembali');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrower-details');
    }
};
