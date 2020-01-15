<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Owner;
use Illuminate\Support\Facades\Redirect;

class CarController extends Controller
{
    public function index()
    {
        $i = 0;

        $cars = Car::with('owner')->get();
        return view('car', compact('cars','i'));
    }

    public function create()
    {

        $owner = Owner::all();
        return view('createcar', compact('owner'));
    }

    public function store(Request $request)
    {
        $add = new \App\Car();
        $add->RegNum = $request->get('plate');
        $add->Manufacturer = $request->get('manu');
        $add->Model = $request->get('model');
        $add->YearMade = $request->get('year');
        $add->owner_id = $request->get('owner');
        $add->save();
        return view('car');
    }

    public function show(Car $car){

        $a = Car::find($car['id']);
        $b = Owner::all();
        return view('editcar',compact('a', 'b'));
    }

    public function update(Request $request, Car $car)
    {
        $add = Car::find($car['id']);
        $add->RegNum = $request->get('plate');
        $add->Manufacturer = $request->get('manu');
        $add->Model = $request->get('model');
        $add->YearMade = $request->get('year');
        $add->owner_id = $request->get('owner');
        $add->save();
        return redirect('/car');
    }

    public function destroy(Car $car)
    {
        $owndel = Car::find($car['id']);
        $owndel->delete();

        return redirect('/car');
    }

}
