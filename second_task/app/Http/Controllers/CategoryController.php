<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

        $category = Category::all();
        return view('Category.showall', compact('category'));
    }


    public function create()
    {
        return view('Category.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);
        $category = Category::create($request->all());

        return view('Category.show',compact('category'))->with('success');
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

    }
}
