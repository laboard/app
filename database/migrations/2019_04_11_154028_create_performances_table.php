<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('ユーザーID');
            $table->unsignedInteger('recruit_id')->comment('募集ID');
            $table->unsignedInteger('applicant_id')->comment('応募ID');
            $table->unsignedInteger('type_id')->comment('種類ID');
            $table->string('service_name')->comment('サービス名');
            $table->string('title')->comment('タイトル');
            $table->string('description')->comment('サービス概要');
            $table->string('category')->comment('カテゴリ');
            $table->string('url')->comment('サービスURL');
            $table->dateTime('startline')->comment('開発開始日時');
            $table->dateTime('deadline')->comment('開発終了日時');
            $table->timestamps();
            $table->softDeletes('deleted_at')->comment('論理削除');

            $table->index('user_id');
            $table->index('recruit_id');
            $table->index('applicant_id');
            $table->index('type_id');
            $table->index('category');

            $table->foreign('user_id')
                ->references('id')
                ->on('twitter_users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('recruit_id')
                ->references('id')
                ->on('recruits');

            $table->foreign('applicant_id')
                ->references('id')
                ->on('applicants');

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
        Schema::dropIfExists('performances');
    }
}
