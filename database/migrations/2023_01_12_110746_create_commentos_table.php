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
            $table->index('id_ricetta');
            $table->foreignId('id_ricetta')->references('id')->on('ricettas')->onDelete('cascade');
            $table->index('id_autore');
            $table->foreignId('id_autore')->references('id')->on('utentes')->onDelete('cascade');
            $table->string('contenuto');
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
