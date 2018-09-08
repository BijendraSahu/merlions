<?php

namespace App\Http\Controllers;

use App\Transfer;
use App\TTCharges;
use Illuminate\Http\Request;

class TourTransferChargesController extends Controller
{
    public function index()
    {
        return view('ttcharges.view_ttcharge')->with('ttcs', TTCharges::getActiveTTCharges());
    }

    public function create()
    {
        $tourtransfer = Transfer::getTranDropdown();
        return view('ttcharges.create_ttcharge')->with(['tourtransfer' => $tourtransfer]);
    }

    public function store(Request $request)
    {
        $ttc = new TTCharges();
//        $ttc->tour_transferid = request('tour_transferid');
        $ttc->transfer_name = request('transfer_name');
        $ttc->type = request('type');
        $ttc->pax_no = request('pax_no');
        $ttc->sic_pax_charges = request('sic_pax_charges');
        $ttc->private_pax_charges = request('private_pax_charges');
        $ttc->save();
        return redirect('ttcharges')->with('message', 'Tour Transfer Charge has been added...!');
    }

    public function edit($id)
    {
        $ttc = TTCharges::find($id);
        $tourtransfer = Transfer::getTranDropdown();
        return view('ttcharges.edit_ttcharge')->with(['ttc' => $ttc, 'tourtransfer' => $tourtransfer]);
    }

    public function update($id, Request $request)
    {
        $ttc = TTCharges::find($id);
        $ttc->tour_transferid = request('tour_transferid');
        $ttc->type = request('type');
        $ttc->pax_no = request('pax_no');
        $ttc->sic_pax_charges = request('sic_pax_charges');
        $ttc->private_pax_charges = request('private_pax_charges');
        $ttc->save();
        return redirect('ttcharges')->with('message', 'Tour Transfer Charge has been updated...!');

    }

    public
    function delete($id)
    {
        $ttc = TTCharges::find($id);
        $ttc->is_active = 0;
        return redirect('ttcharges')->with('message', 'Tour Transfer Charge has been deleted...!');
    }
}
