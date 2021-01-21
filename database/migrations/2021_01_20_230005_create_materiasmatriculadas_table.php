<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasmatriculadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiasmatriculadas', function (Blueprint $table) {
            $table->id();
            $table->integer('alumno')->unsigned();
            $table->integer('materia')->unsigned();
            $table->integer('grupo')->unsigned();
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
        Schema::dropIfExists('materiasmatriculadas');
    }
}
