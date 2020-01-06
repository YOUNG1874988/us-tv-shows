<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tv_series_id')->comment('美剧名称id');
            $table->integer('comment_parent')->default(0)->comment('评论层级：0为第一层，否则就是属于回复别人的评论(comments_id)');
            $table->text('content')->comment('评论内容');
            $table->string('author')->comment('用户名');
            $table->string('email')->comment('用户邮箱');
            $table->smallInteger('status')->default(0)->comment('状态:0待审核，1已通过，2已拒绝');
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
        Schema::dropIfExists('comments');
    }
}
