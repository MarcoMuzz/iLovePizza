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
            $table->text('ingredienti');
            $table->longText('preparazione');
            $table->boolean('romana')->default('0');
            $table->boolean('napoletana')->default('0');
            $table->boolean('resto')->default('0');
            $table->boolean('internazionale')->default('0');
            $table->boolean('light')->default('0');
            $table->boolean('vegetariano')->default('0');
            $table->boolean('senzaglutine')->default('0');
            $table->boolean('senzalattosio')->default('0');
            $table->string('cottura');
            $table->text('immagine');
            $table->index('utente_id');
            $table->foreignId('utente_id')->references('id')->on('utentes')->onDelete('cascade');
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
