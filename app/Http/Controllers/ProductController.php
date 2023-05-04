<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);
        $image = $request->file('image');
        $image_name = time() . $image->getClientOriginalName();
        $image->move('public/uploads/product_image/', $image_name);


        Product::create([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'price' => $request->input('price'),
            'image' => 'public/uploads/product_image/' . $image_name
        ]);


        return redirect('home')->with('message', 'New Product has been sucessfully Created!!!!');
    }
    public function show(){

        return view('home')->with('products', Product::all());
    }
}
