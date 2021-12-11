<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->enum('genero' , ['romantico','ficcion','drama','áccion','miedo']);
            $table->double('N paguinas')->default(0.0);
            $table->unsignedBigInteger('registro_id')->index();
            $table->integer('año');
            $table->bigInteger('persona_id')->unsigned()->index();
            $table->timestamps();



            $table->foreign('persona_id')->references('id')->on('personas')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('registro_id')->references('id')->on('registros')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
