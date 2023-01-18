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
        Schema::create('commentos', function (Blueprint $table) {
            $table->id();
            $table->index('ricetta_id');
            $table->foreignId('ricetta_id')->references('id')->on('ricettas')->onDelete('cascade');
            $table->index('utente_id');
            $table->foreignId('utente_id')->references('id')->on('utentes')->onDelete('cascade');
            $table->longText('contenuto');
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
        Schema::dropIfExists('commentos');
    }
};
