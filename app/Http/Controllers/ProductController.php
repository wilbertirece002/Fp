<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function view()
    {
        $products = Product::all();
        return view('Product.products', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('Product.addproduct', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required|max:10',
            'ProductCode' => 'required|unique:products,ProductCode|max:6', 
            'Price' => 'required|numeric'
        ]);
        $input = $request->all();
        Product::create($input);
        session()->flash(
            'message',
            $input['ProductName'] . ' successfully created.'
        );
        return redirect('/products');
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
        session()->flash(
            'message',
            'Product ' . $product['ProductName'] . ' saved successfully '
        );
        return redirect('/products');
        return redirect('/products');
    }
    public function delete($productid)
    {
        $deleteprod = Product::find($productid);
        $deleteprod->delete($productid);
        session()->flash(
            'message',
            $deleteprod['ProductName'] . ' successfully deleted.'
        );
        return redirect('/products');
    }
}
