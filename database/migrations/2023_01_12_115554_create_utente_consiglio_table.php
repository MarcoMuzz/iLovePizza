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
        Schema::create('utente_consiglio', function (Blueprint $table) {
            $table->index('utente_id');
            $table-> foreignId('utente_id')->references('id')->on('utentes')->onDelete('cascade');
            $table->index('consiglio_id');
            $table-> foreignId('consiglio_id')->references('id')->on('consiglios');
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
        Schema::dropIfExists('utente_consiglio');
    }
};
