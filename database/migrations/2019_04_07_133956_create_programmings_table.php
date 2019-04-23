<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('programming_lang')->comment('プログラミング種類');
            $table->string('similar')->comment('類似語');
            $table->string('icon')->comment('アイコン');
            $table->integer('count')->comment('件数');
            $table->integer('rank')->comment('順序');

            $table->index('programming_lang');
            $table->index('similar');
            $table->index('count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programmings');
    }
}
