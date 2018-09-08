<?php

namespace App\Http\Controllers;

use App\AirportTransfer;
use Illuminate\Http\Request;

class AirportTranferController extends Controller
{
    public function index()
    {
        return view('airport.view_air')->with('airs', AirportTransfer::getActiveAirportTransfer());
    }

    public function create()
    {
        return view('airport.create_air');
    }

    public function store(Request $request)
    {
        $hotel = new AirportTransfer();
        $hotel->transfer_name = request('transfer_name');
        $hotel->type = request('type');
        $hotel->pax_no = request('pax_no');
        $hotel->sic_pax_charges = request('sic_pax_charges');
        $hotel->private_pax_charges = request('private_pax_charges');
        $hotel->save();
        return redirect('air')->with('message', 'Airport Transfer has been added...!');
    }

    public function edit($id)
    {
        $air = AirportTransfer::find($id);
        return view('airport.edit_air')->with(['air' => $air]);
    }

    public function update($id, Request $request)
    {
        $hotel = AirportTransfer::find($id);
        $hotel->transfer_name = request('transfer_name');
        $hotel->type = request('type');
        $hotel->pax_no = request('pax_no');
        $hotel->sic_pax_charges = request('sic_pax_charges');
        $hotel->private_pax_charges = request('private_pax_charges');
        $hotel->save();
        return redirect('air')->with('message', 'Airport Transfer has been updated...!');

    }

    public
    function delete($id)
    {
        $hotel = AirportTransfer::find($id);
        $hotel->is_active = 0;
        return redirect('air')->with('message', 'Airport Transfer has been deleted...!');
    }
}
