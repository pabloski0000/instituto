<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->integer('curso')->unsigned()->nullable();
            $table->string('letra', 1)->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('tutor',100)->nullable();
            $table->integer('anyoescolar')->unsigned();
            $table->integer('nivel')->unsigned()->nullable();
            $table->boolean('verificado')->default(false);
            $table->bigInteger('creador')->unsigned();
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
        Schema::dropIfExists('grupos');
    }
}
