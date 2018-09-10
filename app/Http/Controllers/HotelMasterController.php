<?php

namespace App\Http\Controllers;

use App\Country;
use App\HotelMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HotelMasterController extends Controller
{
    public function index()
    {
        return view('hotel.view_hotel')->with('hotels', HotelMaster::getActiveHotelMaster());
    }

    public function create()
    {
        $country = Country::getCountry();
        return view('hotel.create_hotel')->with(['country' => $country]);
    }

    public function store(Request $request)
    {
        $hotel = new HotelMaster();
        $hotel->hotel_name = request('hotel_name');
        $hotel->hotel_type = request('hotel_type');
        $hotel->country_id = request('country_id');
        $hotel->rent = request('rent');
        $hotel->extra_rent = request('extra_rent');
        $hotel->child_price = request('child_rent');
        $hotel->save();
        return redirect('hotel')->with('message', 'Hotel has been added...!');
    }

    public function edit($id)
    {
        $hotel = HotelMaster::find($id);
        $country = Country::getCountry();
        return view('hotel.edit_hotel')->with(['hotel' => $hotel, 'country' => $country]);
    }

    public function update($id, Request $request)
    {
        $hotel = HotelMaster::find($id);
        $hotel->hotel_name = request('hotel_name');
        $hotel->hotel_type = request('hotel_type');
        $hotel->country_id = request('country_id');
        $hotel->rent = request('rent');
        $hotel->extra_rent = request('extra_rent');
        $hotel->child_price = request('child_rent');
        $hotel->save();
        return redirect('hotel')->with('message', 'Hotel has been updated...!');
    }

    public
    function destroy($id)
    {
        $hotel = HotelMaster::find($id);
//        if ($hotel->is_booked == 1) {
//            return Redirect::back()->withInput()->withErrors('Oops...hotel is already booked...can not be delete right now');
//        }
        $hotel->is_active = 0;
        return redirect('hotel')->with('message', 'Hotel has been deleted...!');
    }

//
    public function booked($id)
    {
        $hotel = HotelMaster::find($id);
        $hotel->is_booked = 1;
        $hotel->save();
        return redirect('hotel')->with('message', 'Hotel has been updated...!');
    }

    public function available($id)
    {
        $hotel = HotelMaster::find($id);
        $hotel->is_booked = 0;
        $hotel->save();
        return redirect('hotel')->with('message', 'Hotel has been updated...!');
    }
}
