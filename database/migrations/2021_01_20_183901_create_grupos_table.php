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
            $table->integer('curso')->unsigned();
            $table->string('letra', 1);
            $table->string('nombre', 100);
            $table->string('tutor',100)->nullable();
            $table->integer('anyoescolar')->unsigned()->nullable();
            $table->integer('nivel')->unsigned()->nullable();
            $table->bigInteger('creador')->unsigned()->nullable();
            $table->boolean('verificado')->default(false);
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
