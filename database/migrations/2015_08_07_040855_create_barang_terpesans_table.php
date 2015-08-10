<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTerpesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_terpesans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pesanan_barang_id');
            $table->integer('barang_id');
            $table->integer('kuantitas');
            $table->date('tanggal_butuh');
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
        Schema::drop('barang_terpesans');
    }
}
