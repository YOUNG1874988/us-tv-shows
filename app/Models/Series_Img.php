<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series_Img extends Model
{
    protected $table = 'tv_series_img';

    public function series()
    {
        return $this->belongsTo('App\Models\Series');
    }
}
