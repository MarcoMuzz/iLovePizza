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
        Schema::create('invitos', function (Blueprint $table) {
            $table->id();
            $table->string('utente_mail');
            $table->index('associazione_id');
            $table->string('token')->unique();
            $table->foreignId('associazione_id')->references('id')->on('associaziones')->onDelete('cascade');
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
        Schema::dropIfExists('invitos');
    }
};
