<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id')->comment('主键ID');
            $table->string('picName',80)->comment('图片名称');
            $table->string('picSize',20)->comment('图片大小');
            $table->string('picType',20)->comment('图片类型');
            $table->integer('picFlag')->comment('是否停用;0:禁用;1:启用');
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
        Schema::drop('banners');
    }
}
