<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = 'tv_series';

    public function episodes()
    {
        return $this->hasMany('App\Models\Episode');
    }

    public function series_imgs()
    {
        return $this->hasMany('App\Models\Series_Img');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Categories');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comments');
    }
}
