<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
            'category_id' => 'required',

        ]);
        $product = Product::create($request->all());

        return view('product.show',compact('product'))->with('success');
    }


    public function addOwner($id){
        $product = Product::find($id);
        return view('product.addowner',compact('product'));

    }
    public function storeOwner(Request $request){
        $pro = Product::find($request->input('product_id'));
        $pro->owners()->attach($request->input('owner_id'));
        $product = Product::all();
        return view('product.showall',compact('product'));

    }

    public function show(Product $product)
    {
        //
    }


    public function edit($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('product.edit',compact('product','category'));
        
    }


    public function update(Request $request)
    {

    }

    public function destroy(int $id)
    {
        $product = Product::find($id);
        $product->category->detach();
        $product->owners->detach();
        $product->delete();
        
        // return redirect()->back()->with('success', 'Product Deleted Successfully');


        $product = Product::all();
        return view('product.showall', compact('roduct'));
    }
}
