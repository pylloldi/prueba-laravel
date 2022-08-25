<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        $categories = Category::select()->get();
        
        return view('categories.index',[
            'categories' => $categories
        ]);
    }

    public function create() 
    {
        return view('categories.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required'
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);        

        return redirect()->route('categories.index');
    }

    public function show(Category $category)
    {        
        return view('categories.show',[
            'category' => $category
        ]);
    }

    public function update(Request $request, $category_id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required'
        ]);

        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy(Category $category) 
    {
        $this->authorize('delete', $category);

        $category->delete();

        $categories = Category::select()->get();

        return redirect()->route('categories.index', [
            'categories' => $categories
        ]);
    } 
}
