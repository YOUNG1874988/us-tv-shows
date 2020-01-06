<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * home page
     */
    public function index()
    {
        $now = date("Y-m-d");
        $categories = Categories::query()
            ->where('status', 1)
            ->select('category_name', 'id')
            ->orderBy('order')
            ->get();
        $dailyUpdates = Series::query()
            ->whereDate('updated_at', $now)
            ->select('name', 'season', 'updated_episode_num', 'score', 'cover_picture', 'updated_at')
            ->limit(9)
            ->orderBy('updated_at', 'desc')
            ->get();
        $latestTvShows = Series::query()
            ->select('name', 'season', 'updated_episode_num', 'score', 'cover_picture', 'debut_date')
            ->whereBetween('debut_date', [
                date("Y-m-d", strtotime("-7days")), date("Y-m-d")
            ])
            ->limit(9)
            ->get();
        $displayByTypes = [];
        foreach ($categories->slice(0, 3) as $item) {
            $displayByTypes[$item->category_name] = Series::query()
                ->select('name', 'season', 'updated_episode_num', 'score', 'cover_picture')
                ->where('category_id', $item->id)
                ->whereBetween('debut_date', [
                    date("Y-m-d", strtotime("-30days")), date("Y-m-d")
                ])
                ->orderBy('click_num', 'desc')
                ->limit(6)
                ->get();
        }
        return view('theme1/index');

    }

    /**
     * categories
     * @param null $category_id
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function categories($category_id = null)
    {
        if (is_numeric($category_id)) {
            $data = Series::query()->where('category_id', $category_id)
                ->select('id', 'name', 'score', 'cover_picture', 'season', 'updated_episode_num')
                ->orderBy('debut_date', 'desc')
                ->paginate(49);
            return $data;
        }
        $data = $data = Series::query()
            ->select('id', 'name', 'score', 'cover_picture', 'season', 'updated_episode_num')
            ->orderBy('debut_date', 'desc')
            ->paginate(49);
        return $data;
    }

    /**
     * video detail
     * @param $id
     */
    public function detail($id)
    {
        $series = Series::query()->findOrFail($id);
        //click num increment 1
        $series->increment('click_num');
    }

    public function rankingList()
    {
        $series = Series::query()
            ->select('id', 'name', 'score', 'cover_picture', 'season')
            ->orderBy('click_num', 'desc')
            ->limit(60)
            ->get();
        dd($series);
    }

    /**
     * search api
     * @param Request $request
     */
    public function search(Request $request)
    {
        $keyword = $request->get('key');
        $keywords = array_filter(explode(' ', $keyword));
        $sql = "select name,score,season_cn,tags,cover_picture,updated_episode_num from tv_series where ";
        foreach ($keywords as $keyword) {
            $sql.="(name like '$keyword%' or season_cn like '$keyword%' or season='$keyword') and ";
        }
        $data = DB::select(DB::raw(rtrim($sql, ' and ')));
        dd($data);
    }
}
