<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatpamTable extends Migration
{
    public function up()
    {
        Schema::create('satpam', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('no_hp', 20);
            $table->enum('shift', ['pagi', 'siang', 'malam']);
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('satpam');
    }
}
