<?php

namespace App\Http\Controllers;

use App\Models\address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function index()
    {
        
       
        $address = Address::all();
      
        return view('address.showall', compact( 'address'));
    }

   
    public function create()
    {

       
        return view('address.create');
        }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
        ]);
        $ad = Address::create($request->all());
        $address=Address::all();
        return view('address.showall', compact('address'))->with('success');
    }

   
    public function show(Address $address)
    {
        //
    }

    public function edit(Address $address)
    {
        //
    }

 
    public function update(Request $request, Address $address)
    {
        //
    }

    public function destroy($id)
    {
        
        $ad=Address::find($id);
        $ad->delete();
        $address = Address::all();
        return view('address.showall', compact('address'));
    }
}
