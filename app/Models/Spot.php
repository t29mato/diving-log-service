<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public function points()
    {
        return $this->hasMany('App\Point');
    }
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
}
