<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id')->comment('主键id');
            $table->string('title',255)->comment('文章标题');
            $table->string('descr',255)->comment('文章简介');
            $table->text('content')->comment('文章内容');
            $table->string('picture',50)->comment('文章配图');
            $table->tinyInteger('user_id')->comment('用户id');
            $table->integer('click_num')->default(0)->comment('点击量');
            $table->integer('replay_num')->default(0)->comment('回复量');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
