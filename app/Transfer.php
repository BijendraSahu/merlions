<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $table = 'tourtransfer';
    public $timestamps = false;

    public function scopegetActiveTransfer($query)
    {
        return $query->where(['is_active' => 1])->orderBy('id', 'desc')->get();
    }

    public function scopegetTranDropdown()
    {
        $hotels = Transfer::where(['is_active' => '1'])->get(['id', 'transfer_name']);
        $arr[0] = "Select";
        foreach ($hotels as $hotel) {
            $arr[$hotel->id] = $hotel->transfer_name;
        }
        return $arr;
    }
}
