<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faixas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("album_id")->unsigned();
            $table->timestamps();
            $table->integer("numero");
            $table->string('nome');
            $table->string('duracao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faixas');
    }
}
