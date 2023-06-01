<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        
        $product = Product::all();
        return view('product.showall', compact('product'));

    }

  
    public function create()
    {
        return view('product.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);
        $product = Product::create($request->all());
        
        return view('product.show',compact('product'))->with('successsssssss');
    
    }

  
    public function show(Product $product)
    {
        
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',

        ]);

        $product = Product::update($request->all());
        return redirect()->route('product.showall')->with('success', 'successful updated');
    }

   
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.showall')->with('success', 'successful delete');

    }
}