<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->bigInteger('NIK')->primary();
            $table->string('nama', 100);
            $table->string('gender', 10);
            $table->string('alamat', 200);
            $table->string('status', 20);
            $table->string('pekerjaan', 50);
            $table->char('warga_negara', 3);
            $table->string('tempat_lahir', 20);
            $table->date('tanggal_lahir');
            $table->char('gol_darah', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduks');
    }
}