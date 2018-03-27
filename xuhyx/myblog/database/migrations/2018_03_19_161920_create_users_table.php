<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('主键ID');
            $table->string('nickname','32')->unique()->comment('用户名');
            $table->string('password','80')->comment('密码');
            $table->enum('status',['0','1'])->default('1')->comment('状态,1:激活,0:锁定');
            $table->enum('auth',['0','1','2'])->comment('状态,0:超级管理员,1:普通管理员,2:普通会员');
            $table->bigInteger('telphone')->comment('电话');
            $table->string('picture','80')->comment('头像图片');
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
        Schema::drop('users');
    }
}
