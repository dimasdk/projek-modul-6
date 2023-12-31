<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

    // Nama    : Dimas Dwi Kurniawan
    // NIM     : 6706220041
    // Kelas   : D3IF 4603

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('koleksi', function (Blueprint $table) {
            $table->id();
            $table->string('namaKoleksi',100);
            $table->tinyInteger('jenisKoleksi');
            $table->timestamp('created_at')->nullable();
            $table->integer('jumlahKoleksi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('koleksi', function (Blueprint $table) {
            //
        });
    }
};
