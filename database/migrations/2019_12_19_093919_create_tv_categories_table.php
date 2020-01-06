<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('order')->unique()->comment('排序');
            $table->string('category_name')->comment('分类名称');
            $table->smallInteger('status')->default(1)->comment('status 0:off 1:on');
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
        Schema::dropIfExists('tv_categories');
    }
}
