<?php

use App\Models\Series_Img;
use Illuminate\Database\Seeder;

class ImgTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $img = new Series_Img();
        $img->tv_series_id = 1;
        $img->link = 'https://imgcdn.91pic.org/img/201911/7b3554bd9f22e4b9.jpg';
        $img->save();

        $img = new Series_Img();
        $img->tv_series_id = 1;
        $img->link = 'https://imgcdn.91pic.org/img/201911/8b812db6249af566.jpg';
        $img->save();
    }
}
