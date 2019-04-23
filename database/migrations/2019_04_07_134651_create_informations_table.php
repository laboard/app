<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('ユーザーID');
            $table->string('prefectural')->comment('都道府県');
            $table->string('gender')->comment('性別');
            $table->string('profession')->comment('職業');
            $table->string('experience')->comment('エンジニア歴');
            $table->string('portfolio_url')->comment('ポートフォリオ URL');
            $table->string('git_url')->comment('GitHub/GitLab URL');
            $table->string('qiita_url')->comment('Qiita URL');
            $table->string('hatena_url')->comment('はてなブログ URL');
            $table->timestamps();

            $table->index('user_id');
            $table->index('gender');
            $table->index('profession');

            $table->foreign('user_id')
                ->references('id')
                ->on('twitter_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
