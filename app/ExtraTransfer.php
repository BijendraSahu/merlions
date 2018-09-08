<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraTransfer extends Model
{
    protected $table = 'extratransfer';
    public $timestamps = false;

    public function scopegetActiveExtra($query)
    {
        return $query->where(['is_active' => 1])->orderBy('id', 'desc')->get();
    }
}
