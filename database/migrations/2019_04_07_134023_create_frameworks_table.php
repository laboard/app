<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrameworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('framework_type')->comment('フレームワーク種類');
            $table->string('similar')->comment('類似語');
            $table->string('icon')->comment('アイコン');
            $table->integer('count')->comment('件数');
            $table->integer('rank')->comment('順序');

            $table->index('framework_type');
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
        Schema::dropIfExists('frameworks');
    }
}
