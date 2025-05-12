<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargaLokalTable extends Migration
{
    public function up()
    {
        Schema::create('warga', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nik', 16);
            $table->string('kk', 16);
            $table->text('alamat_rumah');
            $table->string('no_rumah', 10);
            $table->string('no_hp', 20);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('warga');
    }
}
