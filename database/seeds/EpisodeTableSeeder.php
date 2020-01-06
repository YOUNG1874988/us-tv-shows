<?php

use App\Models\Episode;
use Illuminate\Database\Seeder;

class EpisodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $episode = new Episode();
        $episode->tv_series_id = 1;
        $episode->name = '曼达洛人.The.Mandalorian.S01E01.中英字幕.WEB.1080p-人人影视.V2.mp4';
        $episode->e2k = 'ed2k://|file|曼达洛人.The.Mandalorian.S01E01.中英字幕.WEB.1080p-人人影视.V2.mp4|581034059|4811a39f443c061a4020f996262a6be1|h=q67rn4limokhqbasefqqbnl7wqd7zzgz|/';
        $episode->magnet = 'magnet:?xt=urn:btih:eb1c1b1dc85385d90d6e322cc38931f8591fdd4a';
        $episode->save();

        $episode = new Episode();
        $episode->tv_series_id = 1;
        $episode->name = '曼达洛人.The.Mandalorian.S01E02.中英字幕.WEBrip.720P-人人影视.V2.mp4';
        $episode->e2k = 'ed2k://|file|曼达洛人.The.Mandalorian.S01E02.中英字幕.WEBrip.720P-人人影视.V2.mp4|370676741|6be035aaea830e06d84c3e82563dc6a6|h=6p2jlwskqr2cho6vrwt63wxoagezk45q|/';
        $episode->magnet = 'magnet:?xt=urn:btih:4bbe3f16fffb1f65b697a80894563160d0faadcc';
        $episode->save();

        $episode = new Episode();
        $episode->tv_series_id = 1;
        $episode->name = '曼达洛人.The.Mandalorian.S01E03.中英字幕.WEBrip.720P-人人影视.mp4';
        $episode->e2k = 'ed2k://|file|曼达洛人.The.Mandalorian.S01E03.中英字幕.WEBrip.720P-人人影视.mp4|429936826|6f68878333678838330c970d197f68fd|h=tcssezzwdkb4slyq2mahw3hgqwbk4rbl|/';
        $episode->magnet = 'magnet:?xt=urn:btih:d52d1c0ca0532c5d8027eeccef2272327f206124';
        $episode->save();

        $episode = new Episode();
        $episode->tv_series_id = 1;
        $episode->name = '曼达洛人.The.Mandalorian.S01E04.中英字幕.WEBrip.720P-人人影视.mp4';
        $episode->e2k = 'ed2k://|file|曼达洛人.The.Mandalorian.S01E04.中英字幕.WEBrip.720P-人人影视.mp4|474926683|62bac7897a45a22929ffd080a0d2c632|h=ls5tt44ik2v5t7gw7tsnssepq26xmrzw|/';
        $episode->magnet = 'magnet:?xt=urn:btih:09efd1150c61077c74d6d81d56ad6aa899cbb31a';
        $episode->save();

        $episode = new Episode();
        $episode->tv_series_id = 1;
        $episode->name = '曼达洛人.The.Mandalorian.S01E05.中英字幕.WEBrip.720P-人人影视.V2.mp4';
        $episode->e2k = 'ed2k://|file|曼达洛人.The.Mandalorian.S01E05.中英字幕.WEBrip.720P-人人影视.V2.mp4|398866029|144052e45856d793feaa5885948d9974|h=mhrlayjm2st4vc4osnuegtstebwbm6e4|/';
        $episode->magnet = 'magnet:?xt=urn:btih:23a7832c7b898d6526439d4380c7770368a3b3d2';
        $episode->save();

        $episode = new Episode();
        $episode->tv_series_id = 1;
        $episode->name = '曼达洛人.The.Mandalorian.S01E06.中英字幕.WEBrip.720P-人人影视.mp4';
        $episode->e2k = 'ed2k://|file|曼达洛人.The.Mandalorian.S01E06.中英字幕.WEBrip.720P-人人影视.mp4|528941617|140988851d3a8294fc3f432e8a2edda9|h=6qbdtv6hk5ooix7asfqkepgktu7vckn6|/';
        $episode->magnet = 'magnet:?xt=urn:btih:cf96cc57514b187987fffa7e865e9ba87481014d';
        $episode->save();

        $episode = new Episode();
        $episode->tv_series_id = 1;
        $episode->name = '曼达洛人.The.Mandalorian.S01E07.中英字幕.WEBrip.720P-人人影视.V2.mp4';
        $episode->e2k = 'ed2k://|file|曼达洛人.The.Mandalorian.S01E07.中英字幕.WEBrip.720P-人人影视.V2.mp4|465843967|a8098a406ed508b0f93c49f7c2c4f0f8|h=npjscjocm5gyabzqsugtbdqklgkmt5jg|/';
        $episode->magnet = 'magnet:?xt=urn:btih:8f0b9a57a9d57aaa7e04106a9469f05705e2fb8a';
        $episode->save();
    }
}
