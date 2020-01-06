<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'tv_categories';

    public function series()
    {
        return $this->hasMany('App\Models\Series');
    }
}
