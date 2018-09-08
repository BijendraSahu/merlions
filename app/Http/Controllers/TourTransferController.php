<?php

namespace App\Http\Controllers;

use App\Transfer;
use Illuminate\Http\Request;

class TourTransferController extends Controller
{
    public function index()
    {
        return view('transfer.view_transfer')->with('transfers', Transfer::getActiveTransfer());
    }

    public function create()
    {
        return view('transfer.create_transfer');
    }

    public function store(Request $request)
    {
        $hotel = new Transfer();
        $hotel->transfer_name = request('transfer_name');
        $hotel->save();
        return redirect('transfer')->with('message', 'Tour Transfer has been added...!');
    }

    public function edit($id)
    {
        $transfer = Transfer::find($id);
        return view('transfer.edit_transfer')->with(['transfer' => $transfer]);
    }

    public function update($id, Request $request)
    {
        $hotel = Transfer::find($id);
        $hotel->transfer_name = request('transfer_name');

        $hotel->save();
        return redirect('transfer')->with('message', 'Tour Transfer has been updated...!');

    }

    public
    function delete($id)
    {
        $hotel = Transfer::find($id);
        $hotel->is_active = 0;
        return redirect('transfer')->with('message', 'Tour Transfer has been deleted...!');
    }
}
