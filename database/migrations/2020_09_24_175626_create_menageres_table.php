<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenageresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menageres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('statut_id');
            $table->foreign('statut_id')->references('id')->on('statuts');
            $table->timestamps();
            $table->string('nom');
            $table->string('prenom');
            $table->string('date');
            $table->string('Lieunaiss');
            $table->integer('tel');
            $table->string('cnib');
            $table->string('genre');
            $table->string('photo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menageres');
    }
}
