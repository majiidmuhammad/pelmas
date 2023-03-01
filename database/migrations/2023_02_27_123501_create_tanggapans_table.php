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
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id('id_tanggapan');
            $table->foreignId('pengaduan_id')->constrained('pengaduan'); //relasi id pengaduan dari pengaduan
            $table->dateTime('tgl_tanggapan');
            $table->text('tanggapan');
            $table->foreignId('petugas_id')->constrained('petugas'); //relasi id petugas dari petugas
            $table->timestamps();

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};
