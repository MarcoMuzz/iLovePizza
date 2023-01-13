<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ricettas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('ingredienti');
            $table->string('preparazione');
            $table->boolean('romana');
            $table->boolean('napoletana');
            $table->boolean('resto');
            $table->boolean('internazionale');
            $table->boolean('light');
            $table->boolean('vegetariano');
            $table->boolean('senzaglutine');
            $table->boolean('senzalattosio');
            $table->string('cottura');
            $table->float('votomedio');
            $table->string('immagine');
            $table->index('autore');
            $table->foreignId('autore')->references('id')->on('utentes');
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
        Schema::dropIfExists('ricettas');
    }
};