<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $table = 'meals';
    public $timestamps = false;

    public function scopegetActiveMeal($query)
    {
        return $query->where(['is_active' => 1])->orderBy('id', 'desc')->get();
    }
}
