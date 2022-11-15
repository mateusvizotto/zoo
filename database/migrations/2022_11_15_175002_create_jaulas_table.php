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
        Schema::create('jaulas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('zoologico_id')->unsigned();
            $table->string('nome');
            $table->timestamps();
            $table->foreign('zoologico_id')
                    ->references('id')
                    ->on('zoologicos')
                    ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jaulas');
    }
};
