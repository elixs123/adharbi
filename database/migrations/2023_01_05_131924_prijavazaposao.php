<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prijavazaposao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prijavazaposao', function(Blueprint $table){
            $table->id();
            $table->string('ime');
            $table->string('prezime');
            $table->string('drodjenja');
            $table->string('drzavljanstvo');
            $table->string('adresa');
            $table->string('grad');
            $table->string('telefon');
            $table->string('email');
            $table->string('posao');
            $table->string('vozacka');
            $table->string('s_sprema');
            $table->string('n_skole');
            $table->string('s_zvanje');
            $table->string('n_kompanije');
            $table->string('radno_m');
            $table->string('v_period');
            $table->string('ms_excel');
            $table->string('jezici');
            $table->string('motivaciono_p');
            $table->string('biografija');
            $table->boolean('readed')->default(0);
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
        Schema::dropIfExists('prijavazaposao');
    }
}
