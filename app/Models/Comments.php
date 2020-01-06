<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    public function series()
    {
        return $this->belongsTo('App\Models\Series');
    }
}
