<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $table = 'tv_episode';

    public function series()
    {
        return $this->belongsTo('App\Models\Series');
    }
}
