<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    public function spot()
    {
        return $this->belongsTo('App\Spot');
    }
}
