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
        $request->validate([
            'CategoryCode'=> 'required'
        ]);
        $input = $request->all();
        Category::create($input);
        session()->flash(
            'message',
            'Category ' .
                $input['CategoryCode'] .
                ' successfully added new category.'
        );
        return redirect('/categories');
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
        $categories->CategoryCode = $input['CategoryCode'];
        $categories->Description = $input['Description'];
        session()->flash(
            'message',
            'Category ' . $input['CategoryCode'] . ' save successfully.'
        );
        $categories->Save();
        return redirect('/categories');
    }
    public function delete($categoryid)
    {
        $categoryid = Category::find($categoryid);
        $categoryid->delete($categoryid);
        session()->flash(
            'message',
            'Category ' . $categoryid['CategoryCode'] . ' deleted successfully.'
        );
        return redirect('/categories');
    }
}
