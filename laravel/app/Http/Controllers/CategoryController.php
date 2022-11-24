<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view ('categories.index')->with('categories', $categories);    
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
        return redirect('category')->with('flash_message', 'Category Addedd!');  
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit')->with('categories', $category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $input = $request->all();
        $category->update($input);
        return redirect('category')->with('flash_message', 'category Updated!'); 
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('category')->with('flash_message', 'Category deleted!'); 
    }
}
