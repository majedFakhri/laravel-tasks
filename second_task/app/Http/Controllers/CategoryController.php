<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        
        $category = Category::all();
        return view('category.showall', compact('category'));
    }

    
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
        ]);
        $category = Category::create($request->all());
        
        return view('category.show',compact('category'))->with('success');
    }

    public function show(Category $category)
    {
        //
    }

 
    public function edit(Category $category)
    {
        //
    }

  
    public function update(Request $request, Category $category)
    {
        //
    }

  
    public function destroy(Category $category)
    {
        //
    }
}
