<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        // dd($categories);

        return view('category.index',compact('categories'));
    }


    public function create()
    {
        return view('category.create');
    }


    public function store(Request $request)
    {
        // dd($request->name); it prints the  single data

        $data = $request->validate([
            'category_name'=>'required',
            'priority'=>'required|numeric'
        ]);

        // dd($data); // printing the data 
        

        Category::create($data);
        return redirect(route('category.index'))->with('success','Category created sucessfully!');


    }


    public function edit($id)
    {
        $category= Category::find($id);
        return view('category.edit',compact('category'));
    }
    public function update(Request $request,$id)
    {
        $data= $request->validate([
            'name'=>'required',
            'priority'=>'required|numeric'

        ]);

        $category= Category::find($id);
        $category->update($data);
        return redirect(route('category.index'))->with('success','Category updated sucessfully!');

    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect(route('category.index'))->with('success','Category deleted sucessfully!');

    }
}