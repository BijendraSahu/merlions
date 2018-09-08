<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelMaster extends Model
{
    protected $table = 'hotels';
    public $timestamps = false;

    public function scopeGetActiveHotelMaster($query)
    {
        return $query->orderBy('id', 'desc')->get();
    }

    public function scopegetHotelDropdown()
    {
        $hotels = HotelMaster::where(['is_active' => '1'])->get(['id', 'hotel_name', 'hotel_type']);
        $arr[0] = "SELECT";
        foreach ($hotels as $hotel) {
            $arr[$hotel->id] = $hotel->hotel_name . " " . $hotel->hotel_type;
        }
        return $arr;
    }

    public function country()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }
}
