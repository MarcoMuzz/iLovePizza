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
        Schema::create('associazione_utentes', function (Blueprint $table) {
            $table->index('associazione_id')->unique();
            $table->foreignId('associazione_id')->references('id')->on('associaziones')->onDelete('cascade');
            $table->index('utente_id');
            $table->foreignId('utente_id')->references('id')->on('utentes')->onDelete('cascade');
            $table->integer('ruolo')->default(0);
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
        Schema::dropIfExists('associazione_utentes');
    }
};
