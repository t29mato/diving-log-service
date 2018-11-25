<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $guarded = array('id');
    public static $rules = [
        'name' => 'required',
    ];

    public function spots()
    {
        return $this->hasMany('App\Spot');
    }
}
