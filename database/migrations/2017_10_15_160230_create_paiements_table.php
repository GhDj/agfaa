<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('adherant');
            $table->string('paiement');
            $table->string('methode');
            $table->date('date');
            $table->foreign('adherant')->references('id')->on('adherant')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('paiements');
    }
}
