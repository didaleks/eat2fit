<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelAdmin\Models\Page;

class Day extends Page
{
    protected $attributes = [];

    public function diet()
    {
        return $this->belongsTo('App\Models\Diet');
    }

    public function eatings()
    {
        return $this->hasMany('App\Models\Eating');
    }
}
