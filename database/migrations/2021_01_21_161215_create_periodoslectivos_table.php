<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodoslectivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodoslectivos', function (Blueprint $table) {
            $table->id();
            $table->enum('dia', array('lunes', 'martes','miercoles', 'jueves', 'viernes'));
            $table->timestamp('hora_inicio');
            $table->timestamp('hora_fin');
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
        Schema::dropIfExists('periodoslectivos');
    }
}
