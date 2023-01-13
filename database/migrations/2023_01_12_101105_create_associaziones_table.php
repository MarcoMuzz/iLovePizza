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
        Schema::create('associaziones', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->boolean('romana');
            $table->boolean('napoletana');
            $table->boolean('resto');
            $table->boolean('internazionale');
            $table->index('capo');
            $table->foreignId('capo')->references('id')->on('utentes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {Schema::dropIfExists('associaziones');
       /* $table->dropForeign('lists_capo_foreign');
        $table->dropIndex('lists_capo_index');
        $table->dropColumn('capo');*/

    }
};
