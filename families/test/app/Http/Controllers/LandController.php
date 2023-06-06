<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\land;
use App\Models\Plant;
use Illuminate\Http\Request;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        
        $family = Family::find($id);
        
        $land = Land::where('families_id',$id)->get(); 
        return view('land.showall', compact('family','land'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $family=Family::find($id);
        $plant = Plant::all();
        return view('land.create', compact('plant', 'family'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
        
        
       
        $la = Land::create($request->all());
        $family = Family::all();
        return view('family.showall', compact('family'))->with('success');

    }

    /**
     * Display the specified resource.
     */
    public function show(Land $land)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $land=Land::find($id);
        $plant = Plant::all();
        return view('land.edit', compact('land', 'plant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required',
            'production_quantity' => 'required',
            'plants_id' => 'required',
        ]);

        $la = Land::find($id);
        $la->name = $request['name'];
        $la->plants_id = $request['plants_id'];
        $la->production_quantity = $request['production_quantity'];
        $la->update();
        $family=Family::find($la->families_id);
        $land = Land::all();
        return view('land.showall', compact('land','family'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $la = Land::find($id);
        $family =Family::find($la->families_id);
        $la->delete();
        $land = Land::all();
        return view('land.showall', compact('land','family'));
    }
}
