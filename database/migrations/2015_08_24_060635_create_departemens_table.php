<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Departemen;
class CreateDepartemensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departemens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->timestamps();
        });

        Departemen::create([
            'nama'=>'ADMINISTRASI DAN UMUM',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        Departemen::create([
            'nama'=>'STAFF AHLI',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        Departemen::create([
            'nama'=>'FASILITAS OPERASI',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        Departemen::create([
            'nama'=>'SIE TELEKOMUNIKASI',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        Departemen::create([
            'nama'=>'PELAKSANA PENGADAAN',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        Departemen::create([
            'nama'=>'OPERASI SISTEM-DISPATCHER',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        Departemen::create([
            'nama'=>'OPERASI SISTEM',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        Departemen::create([
            'nama'=>'PERENCANAAN DAN EVALUASI OPERASI SISTEM',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        Departemen::create([
            'nama'=>'SIE STRATEGI OPERASI SISTEM',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('departemens');
    }
}
