<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\family;
use App\Models\Land;
use Illuminate\Http\Request;

class FamilyController extends Controller
{

    public function index()
    {
        $family = Family::all();
        $address = Address::all();
        $land = Land::all();
        return view('family.showall', compact('family', 'address', 'land'));
    }

    public function create()
    {
        $address = Address::all();
        $land = Land::all();
        return view('family.create', compact('address', 'land'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $fa = Family::create($request->all());
        $family = Family::all();
        return view('family.showall', compact('family'))->with('success');
    }

    public function show(Family $family)
    {
        //
    }


    public function edit(Family $family)
    {

        $address = Address::all();
        return view('family.edit', compact('family', 'address'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
        ]);

        $fa = Family::find($id);
        $fa->name = $request['name'];
        $fa->addresses_id = $request['addresses_id'];
        $fa->update();
        $family = Family::all();
        return redirect()->route('family.index', compact('family'));
    }

    public function destroy($id)
    {

        $fa = Family::find($id);
        $fa->delete();
        $family = Family::all();
        return view('family.showall', compact('family'));
    }
}