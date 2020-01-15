<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
    public function index(){

        $owner = Owner::with('cars')->get();
        $i = 0;

        return view('owners',compact('owner', 'i'));
    }

    public function create()
    {
        return view('createowner');
    }

    public function store(Request $request)
    {
        $add = new \App\Owner();
        $add->name = $request->get('name');
        $add->email = $request->get('email');
        $add->save();
        return view('owner');
    }

    public function edit(Owner $owner){

        $i = 0;
        $car = $owner->cars;
        return view('editwoner', compact('owner', 'cars', 'i'));
    }

    public function show(Owner $owner)
    {
        $ownerdit = Owner::find($owner['id']);
        return view('editowner', compact('ownerdit'));
    }

    public function update(Request $request, Owner $owner)
    {
        $add = Owner::find($owner['id']);
        $add->name = $request->get('name');
        $add->email = $request->get('email');
        $add->save();

        return redirect('/owner');
    }

    public function destroy(Owner $owner)
    {
        $owndel = Owner::find($owner['id']);
        $owndel->delete();

        return redirect('/owner');
    }
}
