<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheques', function(Blueprint $table) {
            $table->increments('id');
            $table->string('banque');
            $table->integer('num_cheque');
            $table->integer('montant');
            $table->date('echeance');
            $table->integer('paiement');
            $table->foreign('paiement')->references('id')->on('paiement')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('cheques');
    }
}
