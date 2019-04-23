<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformanceProgrammingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performance_programming', function (Blueprint $table) {
            $table->unsignedInteger('performance_id')->comment('成果物ID');
            $table->unsignedInteger('programming_id')->comment('プログラミングID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performance_programming');
    }
}
