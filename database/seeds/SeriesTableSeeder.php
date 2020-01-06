<?php

use App\Models\Series;
use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = new Series();
        $series->id = 1;
        $series->title = '《曼达洛人 第一季》全集/The Mandalorian Season 1在线观看';
        $series->name = '曼达洛人';
        $series->english_name = 'The Mandalorian';
        $series->director = '黛博拉·周 / 瑞克·法穆易瓦 / 戴夫·菲洛尼 / 布莱丝·达拉斯·霍华德 / 塔伊加·维迪提';
        $series->scriptwriter = '乔恩·费儒 / 乔治·卢卡斯 / 瑞克·法穆易瓦 / 克里斯托弗·约斯特';
        $series->cast = '佩德罗·帕斯卡 / Kyle Pacek / 泰特·弗莱彻 / Bernard Bullen / 吉娜·卡拉诺 / Alexandra Manea / 布伦丹·维恩 / 沃纳·赫尔佐格 / 卡尔·韦瑟斯 / 奥米德·阿布塔西 / 尼克·诺特 / 艾米莉·斯沃洛 / Luis Richard Gomez / Misty Rosas / Jamal Antar / 塔伊加·维迪提 / 约翰·比斯利 / 霍拉提奥·桑斯 / 瑞恩·沃森 / 布莱恩·波塞恩 / 阿西夫·阿里 / 萨拉·贝克 / 尤金·科德罗 / 吉安卡罗·埃斯波西托 / 利欧·哈克福德 / 茱莉亚·琼斯 / 多米尼克·培斯 / 乔恩·费儒 / 裘德·沃尔克';
        $series->category = '科幻';
        $series->category_id = 3;
        $series->tags = '科幻;奇幻';
        $series->area = '美国';
        $series->official_site = 'disneyplusoriginals.disney.com/show/the-mandalorian';
        $series->language = '英语';
        $series->debut_date = '2019-11-12';
        $series->debut_area = '美国';
        $series->season = 1;
        $series->season_cn = '第一季';
        $series->episode_num = 8;
        $series->updated_episode_num = 7;
        $series->episode_time = 40;
        $series->alias = '星球大战：曼达洛人 / Star Wars: The Mandalorian';
        $series->imdb_code = 'tt8111088';
        $series->score = 9.3;
        $series->plot_introduction = '继詹戈与波巴·费特后，另一段曼达洛武士传奇即将徐徐展开。
　　彼时帝国陷落、军团未起，远在新共和国疆域之外，一名孤胆枪手浪迹星涯。';
        $series->cover_picture = 'https://imgcdn.91pic.org/img/poster/8f9b0feecc996730.jpg';
        $series->save();


    }
}
