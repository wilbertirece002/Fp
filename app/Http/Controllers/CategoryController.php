<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function view()
    {
        $categories = Category::all();
        return view('Category.categories', compact('categories'));
    }
    public function create()
    {
        return view('Category.addcategory');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
        return redirect('/');
    }
}
