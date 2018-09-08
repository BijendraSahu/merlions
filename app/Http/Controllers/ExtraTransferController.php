<?php

namespace App\Http\Controllers;

use App\ExtraTransfer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExtraTransferController extends Controller
{
    public function index()
    {
        return view('extra_transfer.view_extra')->with('meals', ExtraTransfer::getActiveExtra());
    }

    public function create()
    {
        return view('extra_transfer.create_extra');
    }

    public function store(Request $request)
    {
        $extra = new ExtraTransfer();
        $extra->interhotel = request('interhotel');
        $extra->cruisetransfer = request('cruisetransfer');
        $extra->effectivedate = Carbon::now()->format('Y-m-d');
        $extra->save();
        return redirect('extra_transfer')->with('message', 'Extra Transfer has been added...!');
    }

    public function edit($id)
    {
        $extra = ExtraTransfer::find($id);
        return view('extra_transfer.edit_extra')->with(['extra' => $extra]);
    }

    public function update($id, Request $request)
    {
        $extra = ExtraTransfer::find($id);
        $extra->interhotel = request('interhotel');
        $extra->cruisetransfer = request('cruisetransfer');
        $extra->effectivedate = Carbon::now()->format('Y-m-d');
        $extra->save();
        return redirect('extra_transfer')->with('message', 'Extra Transfer has been updated...!');

    }

    public
    function delete($id)
    {
        $meal = ExtraTransfer::find($id);
        $meal->is_active = 0;
        return redirect('extra_transfer')->with('message', 'Extra Transfer has been deleted...!');
    }
}
