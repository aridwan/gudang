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
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => 'SUPERVISOR',
            'password' => bcrypt('admin'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        User::create([
            'name' => '5983063P2B',
			'password' => '5983063P2B',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
		 ]);
        User::create([
             'name' => '6083064P2B',
             'password' => '6083064P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6084082P2B',
             'password' => '6084082P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6084091P2B',
             'password' => '6084091P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6084095P2B',
             'password' => '6084095P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6182029P2B',
             'password' => '6182029P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6183045P2B',
             'password' => '6183045P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6184075P2B',
             'password' => '6184075P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6184078P2B',
             'password' => '6184078P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6184079P2B',
             'password' => '6184079P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6184084P2B',
             'password' => '6184084P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6184092P2B',
             'password' => '6184092P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6282031P2B',
             'password' => '6282031P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6284076P2B',
             'password' => '6284076P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6284081P2B',
             'password' => '6284081P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6284096P2B',
             'password' => '6284096P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6383059P2B',
             'password' => '6383059P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6383174JA',
             'password' => '6383174JA',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6384073P2B',
             'password' => '6384073P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6384086P2B',
             'password' => '6384086P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6384087P2B',
             'password' => '6384087P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6389023JA',
             'password' => '6389023JA',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6483060P2B',
             'password' => '6483060P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6689005JA',
             'password' => '6689005JA',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '6992312JA',
             'password' => '6992312JA',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '7092301JA',
             'password' => '7092301JA',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '7094122K3',
             'password' => '7094122K3',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '7193171JA',
             'password' => '7193171JA',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '7195136R',
             'password' => '7195136R',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '7293028P2B',
             'password' => '7293028P2B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '7293210JA',
             'password' => '7293210JA',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '7294005K3',
             'password' => '7294005K3',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '7906169Z',
             'password' => '7906169Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8206454Z',
             'password' => '8206454Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8206087P3B',
             'password' => '8206087P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8206094P3B',
             'password' => '8206094P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8306086P3B',
             'password' => '8306086P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8309073Z',
             'password' => '8309073Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8309189Z',
             'password' => '8309189Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8408377Z',
             'password' => '8408377Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8408536Z',
             'password' => '8408536Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8409224Z',
             'password' => '8409224Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8508379Z',
             'password' => '8508379Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8508230P3B',
             'password' => '8508230P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8509602Z',
             'password' => '8509602Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8510980Z',
             'password' => '8510980Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8609349Z',
             'password' => '8609349Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8609644Z',
             'password' => '8609644Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '86112178Z',
             'password' => '86112178Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8710457Z',
             'password' => '8710457Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8710134Z',
             'password' => '8710134Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8810038P3B',
             'password' => '8810038P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8810939Z',
             'password' => '8810939Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8811187Z',
             'password' => '8811187Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8811906Z',
             'password' => '8811906Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8811899Z',
             'password' => '8811899Z',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8813049ZY',
             'password' => '8813049ZY',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8908241P3B',
             'password' => '8908241P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8908280P3B',
             'password' => '8908280P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '8910039P3B',
             'password' => '8910039P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '9009148P3B',
             'password' => '9009148P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '9015114ZY',
             'password' => '9015114ZY',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '9110037P3B',
             'password' => '9110037P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '9110040P3B',
             'password' => '9110040P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '9110041P3B',
             'password' => '9110041P3B',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '9115535ZY',
             'password' => '9115535ZY',
             'created_at' => new DateTime,
            'updated_at' => new DateTime
         ]);
        User::create([
             'name' => '92141005ZY',
             'password' => '92141005ZY',
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
