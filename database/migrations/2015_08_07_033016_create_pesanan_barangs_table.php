<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesananBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pemesan');
            $table->date('tanggal');
            $table->string('catatan');
            $table->string('keterangan')->nullable();
            $table->string('status')->default('Belum dikonfirmasi');
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
        Schema::drop('pesanan_barangs');
    }
}
