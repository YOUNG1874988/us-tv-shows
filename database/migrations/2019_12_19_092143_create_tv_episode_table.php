<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvEpisodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_episode', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tv_series_id')->comment('美剧名称id');
            $table->text('name')->comment('名字');
            $table->text('e2k')->nullable()->comment('e2k连接');
            $table->text('magnet')->nullable()->comment('磁力连接');
            $table->string('pan_baidu')->nullable()->comment('百度网盘');
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
        Schema::dropIfExists('tv_episode');
    }
}
