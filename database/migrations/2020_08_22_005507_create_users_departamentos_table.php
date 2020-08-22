<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_departamentos', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('departamento_id');           

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('users_departamentos');
    }
}
