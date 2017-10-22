<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdherantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adherants', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('lieu');
            $table->date('dte');
            $table->string('adr');
            $table->string('img');
            $table->string('m_nom');
            $table->string('m_prenom');
            $table->string('m_profession');
            $table->string('m_adr');
            $table->integer('m_tel_g');
            $table->integer('m_tel_d');
            $table->integer('m_tel_t');
            $table->string('m_email');
            $table->string('p_nom');
            $table->string('p_prenom');
            $table->string('p_profession');
            $table->string('p_adr');
            $table->integer('p_tel_g');
            $table->integer('p_tel_d');
            $table->integer('p_tel_t');
            $table->string('p_email');
            $table->string('a_nom');
            $table->string('a_prenom');
            $table->string('a_profession');
            $table->string('a_adr');
            $table->integer('a_tel_g');
            $table->integer('a_tel_d');
            $table->integer('a_tel_t');
            $table->string('a_email');
            $table->string('u_nom');
            $table->string('u_prenom');
            $table->string('u_lae');
            $table->string('u_adr');
            $table->integer('u_tel_g');
            $table->integer('u_tel_d');
            $table->integer('u_tel_t');
            $table->string('u_email');
            $table->string('asthme');
            $table->string('medicamenteuses');
            $table->string('alimentaire');
            $table->string('autre');
            $table->text('ob_med');
            $table->string('cert_med');
            $table->text('ac_fr_an');
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
        Schema::drop('adherants');
    }
}
