<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTamuPendatangTable extends Migration
{
    public function up()
    {
        Schema::create('tamu_pendatang', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('no_identitas', 50);
            $table->text('alamat_asal');
            $table->string('ke_rumah', 100);
            $table->text('alasan_kunjungan');
            $table->dateTime('waktu_masuk');
            $table->dateTime('waktu_keluar')->nullable();
            $table->enum('status', ['masuk', 'keluar'])->default('masuk');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tamu_pendatang');
    }
}
