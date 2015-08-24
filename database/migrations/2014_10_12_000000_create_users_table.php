<?php

use App\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique;
            $table->string('nama');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });


        User::create([
            'name' => 'SUPERVISOR',
            'nama' => 'SUPERVISOR',
            'password' => bcrypt('admin'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
            'name' => '5983063P2B',
            'nama' => 'MAKSUM',
            'password' => bcrypt('5983063P2B'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
         User::create([
             'name' => '6083064P2B',
             'nama' => 'MISGI',
             'password' => bcrypt('6083064P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6084082P2B',
             'nama' => 'SUTRISNO SARIPAN',
             'password' => bcrypt('6084082P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6084091P2B',
             'nama' => 'MOCH. RIONO',
             'password' => bcrypt('6084091P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6084095P2B',
             'nama' => 'MUHAIMIN',
             'password' => bcrypt('6084095P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6182029P2B',
             'nama' => 'EKO PERGIANTORO',
             'password' => bcrypt('6182029P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6183045P2B',
             'nama' => 'SUPRIJADI',
             'password' => bcrypt('6183045P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6184075P2B',
             'nama' => 'SUYANTO',
             'password' => bcrypt('6184075P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6184078P2B',
             'nama' => 'SOEMARSONO',
             'password' => bcrypt('6184078P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6184079P2B',
             'nama' => 'ARLIYANTO',
             'password' => bcrypt('6184079P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6184084P2B',
             'nama' => 'SUTOPO',
             'password' => bcrypt('6184084P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6184092P2B',
             'nama' => 'WINARTO',
             'password' => bcrypt('6184092P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6282031P2B',
             'nama' => 'SUTRISNO',
             'password' => bcrypt('6282031P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6284076P2B',
             'nama' => 'SAYUDI',
             'password' => bcrypt('6284076P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6284081P2B',
             'nama' => 'SUYONO PAIDI',
             'password' => bcrypt('6284081P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6284096P2B',
             'nama' => 'HADI SURONO',
             'password' => bcrypt('6284096P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6383059P2B',
             'nama' => 'MARKULIN',
             'password' => bcrypt('6383059P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6383174JA',
             'nama' => 'DWI SETYOWATI',
             'password' => bcrypt('6383174JA'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6384073P2B',
             'nama' => 'MUHAMMAD SAIFUL TOHA',
             'password' => bcrypt('6384073P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6384086P2B',
             'nama' => 'NURHAYADI',
             'password' => bcrypt('6384086P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6384087P2B',
             'nama' => 'NINIK ANDAJANI',
             'password' => bcrypt('6384087P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6389023JA',
             'nama' => 'MUHAMAD',
             'password' => bcrypt('6389023JA'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6483060P2B',
             'nama' => 'MUKTIONO',
             'password' => bcrypt('6483060P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6689005JA',
             'nama' => 'HERI WIJONO',
             'password' => bcrypt('6689005JA'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '6992312JA',
             'nama' => 'ABDUL ROCHIM',
             'password' => bcrypt('6992312JA'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '7092301JA',
             'nama' => 'WIYONO',
             'password' => bcrypt('7092301JA'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '7094122K3',
             'nama' => 'AJI SUSILA',
             'password' => bcrypt('7094122K3'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '7193171JA',
             'nama' => 'MOH. FIRMANSJAH',
             'password' => bcrypt('7193171JA'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '7195136R',
             'nama' => 'BAMBANG WARSONO',
             'password' => bcrypt('7195136R'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '7293028P2B',
             'nama' => 'SUPRAPTO',
             'password' => bcrypt('7293028P2B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '7293210JA',
             'nama' => 'SISWANTONO',
             'password' => bcrypt('7293210JA'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '7294005K3',
             'nama' => 'NURUL HALIM',
             'password' => bcrypt('7294005K3'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '7906169Z',
             'nama' => 'RINI ANJARSARI',
             'password' => bcrypt('7906169Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8206454Z',
             'nama' => 'AGUSTIN KUSMAWATI',
             'password' => bcrypt('8206454Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8206087P3B',
             'nama' => 'TOTOK SETYONO',
             'password' => bcrypt('8206087P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8206094P3B',
             'nama' => 'KHURNIAWAN DHARDANI',
             'password' => bcrypt('8206094P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8306086P3B',
             'nama' => 'AINUL HIDAYAT',
             'password' => bcrypt('8306086P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8309073Z',
             'nama' => 'HEMI SETARNINGRUM',
             'password' => bcrypt('8309073Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8309189Z',
             'nama' => 'MUHAMMAD FUAD AL HAMDANI',
             'password' => bcrypt('8309189Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8408377Z',
             'nama' => 'VINA DESLIANA',
             'password' => bcrypt('8408377Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8408536Z',
             'nama' => 'FAISOL SIDQI',
             'password' => bcrypt('8408536Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8409224Z',
             'nama' => 'KRISTIAWAN AGUNG SATRIA',
             'password' => bcrypt('8409224Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8508379Z',
             'nama' => 'ANDIKA PRADNYA SATRIAWAN',
             'password' => bcrypt('8508379Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8508230P3B',
             'nama' => 'SAMSUL MA\'ARIF',
             'password' => bcrypt('8508230P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8509602Z',
             'nama' => 'FERNANDO',
             'password' => bcrypt('8509602Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8510980Z',
             'nama' => 'KHRISNA ISMAYADI SOEKMANINGTYES KAIDUN',
             'password' => bcrypt('8510980Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8609349Z',
             'nama' => 'INDRA KURNIAWAN',
             'password' => bcrypt('8609349Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8609644Z',
             'nama' => 'DEBBY NURICASARI SOEPARNO',
             'password' => bcrypt('8609644Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '86112178Z',
             'nama' => 'DWI AJENG MEILANI AR',
             'password' => bcrypt('86112178Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8710457Z',
             'nama' => 'DHITA SILVIA',
             'password' => bcrypt('8710457Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8710134Z',
             'nama' => 'LIANA MARYANTI',
             'password' => bcrypt('8710134Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8810038P3B',
             'nama' => 'SEPTA NUGRAHA RAHARJA',
             'password' => bcrypt('8810038P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8810939Z',
             'nama' => 'LUCIA DIAN APRILISA',
             'password' => bcrypt('8810939Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8811187Z',
             'nama' => 'GALIH NASRUL ICHSAN',
             'password' => bcrypt('8811187Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8811906Z',
             'nama' => 'BOBBY SELFIAN PRADANA',
             'password' => bcrypt('8811906Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8811899Z',
             'nama' => 'DWI PUTRA POERNOMO',
             'password' => bcrypt('8811899Z'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8813049ZY',
             'nama' => 'ENDRI IRWANSAH',
             'password' => bcrypt('8813049ZY'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8908241P3B',
             'nama' => 'FERRY FEBRIANTO',
             'password' => bcrypt('8908241P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8908280P3B',
             'nama' => 'KHAIRUDDIN CAHYO WICAKSONO',
             'password' => bcrypt('8908280P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '8910039P3B',
             'nama' => 'MOHAMMAD NUR SIDDADA',
             'password' => bcrypt('8910039P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '9009148P3B',
             'nama' => 'AMIN SUPRIYONO',
             'password' => bcrypt('9009148P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '9015114ZY',
             'nama' => 'FRANS BERTUA YONATAN SITOMPUL',
             'password' => bcrypt('9015114ZY'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '9110037P3B',
             'nama' => 'SAPUTRA RAHMAN PERDANA',
             'password' => bcrypt('9110037P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '9110040P3B',
             'nama' => 'ILHAM ARIYANTO',
             'password' => bcrypt('9110040P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '9110041P3B',
             'nama' => 'GENDHON SUHENDRO',
             'password' => bcrypt('9110041P3B'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '9115535ZY',
             'nama' => 'YOAN LUSIA',
             'password' => bcrypt('9115535ZY'),
             'created_at' => new DateTime,
             'updated_at' => new DateTime
          ]);
         User::create([
             'name' => '92141005ZY',
             'nama' => 'I GUSTI NGURAH ADI MERTANA',
             'password' => bcrypt('92141005ZY'),
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
        Schema::drop('users');
    }
}
