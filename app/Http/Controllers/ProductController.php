<?php

namespace App\Http\Controllers;

use App\Models\Product;
use http\Message;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $products = Product::all();

        return view('show', [
            'test' => 'title',
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
           'title'=>'required',
           'description'=>'required',
           'price'=>'required|integer|min:15',
       ]);

       Product::create($data);
       return redirect()->route('product.show');
    }

    public function edit(Product $product)
    {
        return view('update',[
            'product'=>$product
        ]);
    }

    public function update(Product $product,Request $request)
    {
        $data = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required|integer|min:15',
        ]);

        $product->update($data);
        return redirect()->route('product.show')->with(['message'=>'Updated']);
    }

    public function delete(Product $product)
    {
       $product->delete();
       return redirect()->route('product.show')->with(['message'=>'Deleted']);
    }
}
