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
        Schema::create('consiglios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('immagine');
            $table->longText('contenuto');
            $table->index('utente_id')->usigned();
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
        Schema::dropIfExists('consiglios');
    }
};
