<?php

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('tv_categories')->insert([
//            'order' => 1,
//            'category_name' => '喜剧片',
//            'status' => 1
//        ]);
        $category = new Categories();
        $category->order = 1;
        $category->category_name = '喜剧';
        $category->save();

        $category = new Categories();
        $category->order = 2;
        $category->category_name = '恐怖';
        $category->save();

        $category = new Categories();
        $category->order = 3;
        $category->category_name = '科幻';
        $category->save();

        $category = new Categories();
        $category->order = 4;
        $category->category_name = '剧情';
        $category->save();

        $category = new Categories();
        $category->order = 5;
        $category->category_name = '动作';
        $category->save();

        $category = new Categories();
        $category->order = 6;
        $category->category_name = '动画';
        $category->save();

        $category = new Categories();
        $category->order = 7;
        $category->category_name = '奇幻';
        $category->save();

        $category = new Categories();
        $category->order = 8;
        $category->category_name = '悬疑';
        $category->save();
    }
}
