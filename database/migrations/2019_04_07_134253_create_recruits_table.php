<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('ユーザーID');
            $table->unsignedInteger('type_id')->comment('種類ID');
            $table->string('category')->comment('カテゴリ');
            $table->integer('remote')->comment('リモート許可');
            $table->integer('people')->comment('募集する人数');
            $table->string('title')->comment('タイトル');
            $table->string('description')->comment('募集内容説明');
            $table->string('url')->comment('サービスURL');
            $table->dateTime('deadline')->comment('開発終了日時');
            $table->timestamps();
            $table->softDeletes('deleted_at')->comment('論理削除');

            $table->index('user_id');
            $table->index('type_id');
            $table->index('category');

            $table->foreign('user_id')
                ->references('id')
                ->on('twitter_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('type_id')
                ->references('id')
                ->on('types')
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
        Schema::dropIfExists('recruits');
    }
}
