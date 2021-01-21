<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodoclasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodoclases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('periodo_id')->nullable();
            $table->bigInteger('materiaimpartida_id')->nullable();
            $table->bigInteger('aula_id')->nullable();
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
        Schema::dropIfExists('periodoclases');
    }
}
