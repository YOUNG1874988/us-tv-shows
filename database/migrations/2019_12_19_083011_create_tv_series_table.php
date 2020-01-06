<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('剧名(全称)');
            $table->string('name')->comment('剧名');
            $table->string('english_name')->comment('英文名');
            $table->string('director')->comment('导演');
            $table->string('scriptwriter')->nullable()->comment('编剧');
            $table->text('cast')->comment('演员表/主演');
            $table->string('category')->comment('分类名');
            $table->smallInteger('category_id')->comment('分类id');
            $table->string('tags')->comment('标签，如果有多个标签则用;隔开 如:恐怖;玄幻');
            $table->string('area')->nullable()->comment('国家/地区');
            $table->string('official_site')->nullable()->comment('官方网站');
            $table->string('language')->nullable()->comment('语言');
            $table->string('debut_date')->nullable()->comment('首播时间');
            $table->string('debut_area')->nullable()->comment('首播地区');
            $table->smallInteger('season')->default(1)->comment('季');
            $table->string('season_cn', 25)->comment('中文名 第几季');
            $table->smallInteger('episode_num')->nullable()->comment('总集数');
            $table->smallInteger('updated_episode_num')->comment('当前更新的集数');
            $table->smallInteger('episode_time')->nullable()->comment('单集时长');
            $table->string('alias')->nullable()->comment('别名');
            $table->string('imdb_code')->nullable()->comment('IMDb编码');
            $table->float('score')->comment('评分');
            $table->integer('click_num')->default(1)->comment('点击数');
            $table->text('plot_introduction')->comment('剧情介绍');
            $table->string('cover_picture')->comment('封面图片');
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
        Schema::dropIfExists('tv_series');
    }
}
