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
        Schema::create('inovasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('kategori');
            $table->string('nama');
            $table->string('tahapan');
            $table->string('inisiator');
            $table->string('jenis_inovasi');
            $table->string('bentuk_inovasi');
            $table->string('tematik')->nullable();
            $table->string('urusan');
            $table->date('waktu_ujiCoba')->nullable();
            $table->date('waktu_penerapan')->nullable();
            $table->longText('rancangan');
            $table->longText('tujuan');
            $table->longText('manfaat');
            $table->longText('hasil');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inovasis');
    }
};
