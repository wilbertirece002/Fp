<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class ProductController extends Controller
{
    public function view()
    {
        $products = Product::with('category')->get();
        return view('Product.products', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('Product.addproduct', compact('categories'));
    }
    public function store(Request $request)
    
    {
        $input  = $request->all();      
        Product::create($input);
        return redirect('/');   
    }   
    public function edit($productid)
    {
        $categories = Category::all();
        $product = Product::find($productid);
        return view('Product.editproduct', compact('product', 'categories'));
    }
    public function update(Request $request, $productid)
    {
        $input = $request->all();
        $product = Product::find($productid);
        $product->ProductName = $input['ProductName'];
        $product->ProductCode = $input['ProductCode'];
        $product->Category = $input['Category'];
        $product->Description = $input['Description'];
        $product->Color = $input['Color'];
        $product->Size = $input['Size'];
        $product->Price = $input['Price'];
        $product->save();
        return redirect('/');
    }
    public function delete($productid)
    {
        Product::destroy($productid);
        return redirect('/');
    }
}
