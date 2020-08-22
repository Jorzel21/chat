<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanaisDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canais_departamentos', function (Blueprint $table) {
            $table->string('canal_id');
            $table->string('departamento_id');           

            $table->foreign('canal_id')->references('id')->on('canais');
            $table->foreign('departamento_id')->references('id')->on('departamentos');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canais_departamentos');
    }
}
