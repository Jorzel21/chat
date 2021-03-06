<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersConversasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_conversas', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('conversa_id');           

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('conversa_id')->references('id')->on('conversas');

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
        Schema::dropIfExists('users_conversas');
    }
}
