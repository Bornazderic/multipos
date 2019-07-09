<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('distributeri_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ime');
            $table->string('prezime');
            $table->tinyInteger('nivo')->nullable();
            $table->boolean('status')->default(1);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('distributeri', function(Blueprint $table){
            $table->increments('id_dp');
           // $table->unsignedBigInteger('dp');
            $table->unsignedInteger('user_id');
           $table->string('naziv');
            $table->string('adresa');
            $table->integer('ptt');
            $table->integer('adresa_kb');
            $table->integer('oib')->unique();
            $table->integer('tel');
            $table->integer('fax');
            $table->integer('mobitel');
            $table->string('email')->unique();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('distributeri_users')->onDelete('cascade');

        });
        Schema::create('distributeri_artikli' , function(Blueprint $table){
            $table->unsignedInteger('sifra_art')->primary();
            //$table->text('katalog_art')->unique()->nullable();
            $table->integer('dp')->unsigned();
            $table->bigInteger('eancode_art')->unique();
            $table->string('naziv');
            $table->enum('jmj',['kom' , 'lit' , 'kg']);
            $table->enum('jmj2',['1','2','4','8','12','24']);
            $table->double('cijena1');
            $table->double('cijena2');
            $table->integer('pdv');
            $table->text('slika');
            $table->timestamps();

            $table->foreign('dp')->references('id_dp')->on('distributeri')->onDelete('cascade');

        });

        Schema::create('artikli_akcije', function(Blueprint $table){
            $table->bigIncrements('id_akc');
            $table->date('datumod');
            $table->date('datumdo');
            $table->integer('id_dp')->unsigned();
            $table->integer('sifra_art')->unsigned();
            $table->integer('popust');
            $table->boolean('status')->default(1);
            $table->timestamps();

            

            $table->foreign('sifra_art')->references('sifra_art')->on('distributeri_artikli')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distributeri_users');
        Schema::dropIfExists('distributeri');
        Schema::dropIfExists('distributeri_artikli');
        Schema::dropIfExists('artikli_akcije');
    }
}
