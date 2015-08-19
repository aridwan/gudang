<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('email');
            $table->string('jabatan');
            $table->timestamps();
        });

         Anggota::create([
         	'nip' => '5983063P2B',
         	'nama' => 'MAKSUM',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '6083064P2B',
         	'nama' => 'MISGI',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '6084082P2B',
         	'nama' => 'SUTRISNO SARIPAN',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6084091P2B',
         	'nama' => 'MOCH. RIONO',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '6084095P2B',
         	'nama' => 'MUHAIMIN',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '6182029P2B',
         	'nama' => 'EKO PERGIANTORO',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6183045P2B',
         	'nama' => 'SUPRIJADI',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '6184075P2B',
         	'nama' => 'SUYANTO',
         	'email' => '',
         	'jabatan' => 'SIE TELEKOMUNIKASI'
         ]);
         Anggota::create([
         	'nip' => '6184078P2B',
         	'nama' => 'SOEMARSONO',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6184079P2B',
         	'nama' => 'ARLIYANTO',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6184084P2B',
         	'nama' => 'SUTOPO',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6184092P2B',
         	'nama' => 'WINARTO',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6282031P2B',
         	'nama' => 'SUTRISNO',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '6284076P2B',
         	'nama' => 'SAYUDI',
         	'email' => '',
         	'jabatan' => 'PELAKSANA PENGADAAN'
         ]);
         Anggota::create([
         	'nip' => '6284081P2B',
         	'nama' => 'SUYONO PAIDI',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6284096P2B',
         	'nama' => 'HADI SURONO',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6383059P2B',
         	'nama' => 'MARKULIN',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '6383174JA',
         	'nama' => 'DWI SETYOWATI',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6384073P2B',
         	'nama' => 'MUHAMMAD SAIFUL TOHA',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6384086P2B',
         	'nama' => 'NURHAYADI',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '6384087P2B',
         	'nama' => 'NINIK ANDAJANI',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '6389023JA',
         	'nama' => 'MUHAMAD',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '6483060P2B',
         	'nama' => 'MUKTIONO',
         	'email' => '',
         	'jabatan' => 'PELAKSANA PENGADAAN'
         ]);
         Anggota::create([
         	'nip' => '6689005JA',
         	'nama' => 'HERI WIJONO',
         	'email' => '',
         	'jabatan' => 'PELAKSANA PENGADAAN'
         ]);
         Anggota::create([
         	'nip' => '6992312JA',
         	'nama' => 'ABDUL ROCHIM',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '7092301JA',
         	'nama' => 'WIYONO',
         	'email' => '',
         	'jabatan' => 'SIE TELEKOMUNIKASI'
         ]);
         Anggota::create([
         	'nip' => '7094122K3',
         	'nama' => 'AJI SUSILA',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '7193171JA',
         	'nama' => 'MOH. FIRMANSJAH',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '7195136R',
         	'nama' => 'BAMBANG WARSONO',
         	'email' => '',
         	'jabatan' => 'STAFF AHLI'
         ]);
         Anggota::create([
         	'nip' => '7293028P2B',
         	'nama' => 'SUPRAPTO',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '7293210JA',
         	'nama' => 'SISWANTONO',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM'
         ]);
         Anggota::create([
         	'nip' => '7294005K3',
         	'nama' => 'NURUL HALIM',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '7906169Z',
         	'nama' => 'RINI ANJARSARI',
         	'email' => '',
         	'jabatan' => 'PERENCANAAN DAN EVALUASI OPERASI SISTEM'
         ]);
         Anggota::create([
         	'nip' => '8206454Z',
         	'nama' => 'AGUSTIN KUSMAWATI',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '8206087P3B',
         	'nama' => 'TOTOK SETYONO',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '8206094P3B',
         	'nama' => 'KHURNIAWAN DHARDANI',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '8306086P3B',
         	'nama' => 'AINUL HIDAYAT',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '8309073Z',
         	'nama' => 'HEMI SETARNINGRUM',
         	'email' => '',
         	'jabatan' => 'PERENCANAAN DAN EVALUASI OPERASI SISTEM'
         ]);
         Anggota::create([
         	'nip' => '8309189Z',
         	'nama' => 'MUHAMMAD FUAD AL HAMDANI',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8408377Z',
         	'nama' => 'VINA DESLIANA',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8408536Z',
         	'nama' => 'FAISOL SIDQI',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '8409224Z',
         	'nama' => 'KRISTIAWAN AGUNG SATRIA',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8508379Z',
         	'nama' => 'ANDIKA PRADNYA SATRIAWAN',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '8508230P3B',
         	'nama' => 'SAMSUL MA\'ARIF',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8509602Z',
         	'nama' => 'FERNANDO',
         	'email' => '',
         	'jabatan' => 'SIE STRATEGI OPERASI SISTEM'
         ]);
         Anggota::create([
         	'nip' => '8510980Z',
         	'nama' => 'KHRISNA ISMAYADI SOEKMANINGTYES KAIDUN',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8609349Z',
         	'nama' => 'INDRA KURNIAWAN',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8609644Z',
         	'nama' => 'DEBBY NURICASARI SOEPARNO',
         	'email' => '',
         	'jabatan' => 'PELAKSANA PENGADAAN']
         );
         Anggota::create([
         	'nip' => '86112178Z',
         	'nama' => 'DWI AJENG MEILANI AR',
         	'email' => '',
         	'jabatan' => 'PERENCANAAN DAN EVALUASI OPERASI SISTEM'
         ]);
         Anggota::create([
         	'nip' => '8710457Z',
         	'nama' => 'DHITA SILVIA',
         	'email' => '',
         	'jabatan' => 'PERENCANAAN DAN EVALUASI OPERASI SISTEM'
         ]);
         Anggota::create([
         	'nip' => '8710134Z',
         	'nama' => 'LIANA MARYANTI',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8810038P3B',
         	'nama' => 'SEPTA NUGRAHA RAHARJA',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '8810939Z',
         	'nama' => 'LUCIA DIAN APRILISA',
         	'email' => '',
         	'jabatan' => 'ADMINISTRASI DAN UMUM'
         ]);
         Anggota::create([
         	'nip' => '8811187Z',
         	'nama' => 'GALIH NASRUL ICHSAN',
         	'email' => '',
         	'jabatan' => 'SIE TELEKOMUNIKASI'
         ]);
         Anggota::create([
         	'nip' => '8811906Z',
         	'nama' => 'BOBBY SELFIAN PRADANA',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8811899Z',
         	'nama' => 'DWI PUTRA POERNOMO',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8813049ZY',
         	'nama' => 'ENDRI IRWANSAH',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '8908241P3B',
         	'nama' => 'FERRY FEBRIANTO',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8908280P3B',
         	'nama' => 'KHAIRUDDIN CAHYO WICAKSONO',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '8910039P3B',
         	'nama' => 'MOHAMMAD NUR SIDDADA',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '9009148P3B',
         	'nama' => 'AMIN SUPRIYONO',
         	'email' => '',
         	'jabatan' => 'FASILITAS OPERASI'
         ]);
         Anggota::create([
         	'nip' => '9015114ZY',
         	'nama' => 'FRANS BERTUA YONATAN SITOMPUL',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '9110037P3B',
         	'nama' => 'SAPUTRA RAHMAN PERDANA',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '9110040P3B',
         	'nama' => 'ILHAM ARIYANTO',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '9110041P3B',
         	'nama' => 'GENDHON SUHENDRO',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
         Anggota::create([
         	'nip' => '9115535ZY',
         	'nama' => 'YOAN LUSIA',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM'
         ]);
         Anggota::create([
         	'nip' => '92141005ZY',
         	'nama' => 'I GUSTI NGURAH ADI MERTANA',
         	'email' => '',
         	'jabatan' => 'OPERASI SISTEM- DISPATCHER'
         ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anggotas');
    }
}
