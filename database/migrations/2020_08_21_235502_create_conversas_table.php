<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('canal_id');
            $table->string('departamento_id');
            $table->string('departamento_nome');
            $table->enum('status',['aguardando', 'atendimento','transferido','finalizado']);

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
        Schema::dropIfExists('conversas');
    }
}
