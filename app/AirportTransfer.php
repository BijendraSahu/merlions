<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirportTransfer extends Model
{
    protected $table = 'airporttransfer';
    public $timestamps = false;

    public function scopeGetActiveAirportTransfer($query)
    {
        return $query->where(['is_active' => 1])->orderBy('id', 'desc')->get();
    }

    public function scopegetHotelDropdown()
    {
        $hotels = AirportTransfer::where(['is_active' => '1'])->get(['id', 'hotel_name', 'hotel_type']);
        $arr[0] = "SELECT";
        foreach ($hotels as $hotel) {
            $arr[$hotel->id] = $hotel->hotel_name . " " . $hotel->hotel_type;
        }
        return $arr;
    }
}
