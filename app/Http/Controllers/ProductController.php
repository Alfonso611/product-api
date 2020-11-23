<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends BaseController
{
    /**
     * Create a new controller instance
     * 
     *  @return void
     */

    public function index()
    {
        $product = Product::all();
        return response()->json($product);
    }

    public function create(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();
        return response()->json($product);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product= Product::find($id);
        
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return response()->json($product);
    }

    public function destroy($id)
    {
       $product = Product::find($id);
       $product->delete();
       return response()->json('product removed successfully');
    }
}
