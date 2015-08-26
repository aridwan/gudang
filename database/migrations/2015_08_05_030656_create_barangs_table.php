<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Barang;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('kuantitas');
            $table->integer('pemakaian')->default(0);
            $table->integer('pengadaan')->default(0);
            $table->string('keterangan');
            $table->boolean('used')->default(0);
            $table->timestamps();
        });

         Barang::create([
            'nama' => 'Amplop Putih No. 104',
            'keterangan' => 'pack',
            'kuantitas' => '0',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Amplop Putih No. 90',
            'keterangan' => 'pack',
            'kuantitas' => '4',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Binder Clips No. 107',
            'keterangan' => 'pack',
            'kuantitas' => '36',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Binder Clips No. 155',
            'keterangan' => 'pack',
            'kuantitas' => '22',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Binder Clips No. 200',
            'keterangan' => 'pack',
            'kuantitas' => '21',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Binder Clips No. 260',
            'keterangan' => 'pack',
            'kuantitas' => '28',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Buku Ekspedisi',
            'keterangan' => 'bh',
            'kuantitas' => '20',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Buku Folio Bergaris',
            'keterangan' => 'bh',
            'kuantitas' => '17',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Buku Folio Bergaris 200',
            'keterangan' => 'bh',
            'kuantitas' => '2',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Buku Kwarto Bergaris ',
            'keterangan' => 'bh',
            'kuantitas' => '20',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);


         Barang::create([
            'nama' => 'Cellulose Tape Panfix',
            'keterangan' => 'bh',
            'kuantitas' => '12',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Cover Plastik',
            'keterangan' => 'bh',
            'kuantitas' => '1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Cutter',
            'keterangan' => 'bh',
            'kuantitas' => '0',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Dispenser Tape',
            'keterangan' => 'bh',
            'kuantitas' => '5',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Isi Cutter L-500',
            'keterangan' => 'bh',
            'kuantitas' => '10',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Isi Stapler No. 10',
            'keterangan' => 'pack',
            'kuantitas' => '77',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Isi Stapler No. 3',
            'keterangan' => 'pack',
            'kuantitas' => '97',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Kertas A4',
            'keterangan' => 'rim',
            'kuantitas' => '35',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Kertas A4 Hijau',
            'keterangan' => 'rim',
            'kuantitas' => '28',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Kertas A4 Kuning',
            'keterangan' => 'rim',
            'kuantitas' => '8',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Kertas A4 Merah',
            'keterangan' => 'rim',
            'kuantitas' => '14',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Kertas Concorde Hijau',
            'keterangan' => 'pack',
            'kuantitas' => '12',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Kertas Concorde Kuning',
            'keterangan' => 'pack',
            'kuantitas' => '0',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
         
         Barang::create([
            'nama' => 'Kertas Faximile',
            'keterangan' => 'rol',
            'kuantitas' => '25',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Kertas Folio 80 g',
            'keterangan' => 'rim',
            'kuantitas' => '3',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Kertas Rol Mesin Hitung Panjang  (65 x 68)',
            'keterangan' => 'bh',
            'kuantitas' => '18',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Kertas Rol Mesin Hitung Pendek',
            'keterangan' => 'bh',
            'kuantitas' => '8',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Lem O Glue',
            'keterangan' => 'tube',
            'kuantitas' => '24',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Ordner',
            'keterangan' => 'bh',
            'kuantitas' => '0',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Paper Clips Besar No. 5',
            'keterangan' => 'pack',
            'kuantitas' => '33',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Paper Clips Kecil No. 3',
            'keterangan' => 'pack',
            'kuantitas' => '21',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
         
         Barang::create([
            'nama' => 'Perpurator/ Plong',
            'keterangan' => 'bh',
            'kuantitas' => '1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Post It',
            'keterangan' => 'pack',
            'kuantitas' => '3',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Snelhecter Folio',
            'keterangan' => 'bh',
            'kuantitas' => '45',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Snowman',
            'keterangan' => 'bh',
            'kuantitas' => '38',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Stabilo',
            'keterangan' => 'bh',
            'kuantitas' => '27',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Stapler No. 10',
            'keterangan' => 'bh',
            'kuantitas' => '12',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Stapler No. 3',
            'keterangan' => 'bh',
            'kuantitas' => '9',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
         
         Barang::create([
            'nama' => 'Stapler Remover',
            'keterangan' => 'bh',
            'kuantitas' => '10',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Stopmap',
            'keterangan' => 'bh',
            'kuantitas' => '161',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Tinta Stamp',
            'keterangan' => 'tube',
            'kuantitas' => '4',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);

         Barang::create([
            'nama' => 'Tipe-X',
            'keterangan' => 'set',
            'kuantitas' => '27',
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
        Schema::drop('barangs');
    }
}
