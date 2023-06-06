<?php

namespace App\Http\Controllers;

use App\Models\plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{    public function index()
    {
        
        $plant = Plant::all();
      
        return view('plant.showall', compact( 'plant'));
    }

    public function create()
    {
        
        return view('plant.create');
    }

 
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
        ]);
        $pl = Plant::create($request->all());
        $plant=Plant::all();
        return view('plant.showall', compact('plant'))->with('success');
    }

    public function show(Plant $plant)
    {
        //
    }

    public function edit(Plant $plant)
    {
        //
    }

    public function update(Request $request, Plant $plant)
    {
        //
    }

    public function destroy($id)
    {
        
        
        $pl=Plant::find($id);
        $pl->delete();
        $plant = Plant::all();
        return view('plant.showall', compact('plant'));
    }
}
