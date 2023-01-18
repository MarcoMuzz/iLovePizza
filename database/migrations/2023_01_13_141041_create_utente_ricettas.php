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
        Schema::create('utente_ricettas', function (Blueprint $table) {
            $table->index('utente_id');
            $table-> foreignId('utente_id')->references('id')->on('utentes')->onDelete('cascade');
            $table->index('ricetta_id');
            $table-> foreignId('ricetta_id')->references('id')->on('ricettas')->onDelete('cascade');
            $table->float('voto');
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
        Schema::dropIfExists('utente_ricettas');
    }
};
