<?php

namespace App\Http\Controllers;

use App\Meal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        return view('meals.view_meals')->with('meals', Meal::getActiveMeal());
    }

    public function create()
    {
        return view('meals.create_meal');
    }

    public function store(Request $request)
    {
        $meal = new Meal();
        $meal->lunch = request('lunch');
        $meal->dinner = request('dinner');
        $meal->effectivedate = Carbon::now()->format('Y-m-d');
        $meal->save();
        return redirect('meal')->with('message', 'Meal has been added...!');
    }

    public function edit($id)
    {
        $meal = Meal::find($id);
        return view('meals.edit_meal')->with(['meal' => $meal]);
    }

    public function update($id, Request $request)
    {
        $meal = Meal::find($id);
        $meal->lunch = request('lunch');
        $meal->dinner = request('dinner');
        $meal->effectivedate = Carbon::now()->format('Y-m-d');
        $meal->save();
        return redirect('meal')->with('message', 'Meal has been updated...!');

    }

    public
    function delete($id)
    {
        $meal = Meal::find($id);
        $meal->is_active = 0;
        return redirect('meal')->with('message', 'Meal has been deleted...!');
    }
}
