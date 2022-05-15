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
    public function edit($categoryid)
    {
        $categories = Category::find($categoryid);
        return view('Category.editcategory', compact('categories'));
    }
    public function update(Request $request, $categoryid)
    {
        $input = $request->all();
        $categories = Category::find($categoryid);
        $categories->CategoryCode= $input['CategoryCode'];
        $categories->Description= $input['Description'];

        $categories->Save();
        return redirect('/');
    }
}
