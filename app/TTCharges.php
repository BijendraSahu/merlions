<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TTCharges extends Model
{
    protected $table = 'tourtransfer_charges';
    public $timestamps = false;

    public function scopegetActiveTTCharges($query)
    {
        return $query->where(['is_active' => 1])->orderBy('id', 'desc')->get();
    }

    public
    function tt()
    {
        return $this->belongsTo('App\Transfer','tour_transferid');
    }
}
