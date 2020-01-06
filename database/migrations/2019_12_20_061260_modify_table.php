<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        if(!Schema::hasTable('test3')){
//            Schema::rename('test2', 'test3');
//        }
//        Schema::table('test3', function(Blueprint $table){
//            $table->renameColumn('test5', 'test6');
//        });
//        Schema::table('tv_categories', function(Blueprint $table){
//            $table->integer('order')->comment('排序');
//        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
