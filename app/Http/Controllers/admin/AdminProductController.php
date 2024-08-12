<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function product_add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $product = new Product();
        $product->name = $request->name;
        $product->category = $request->category;
        $product->model = $request->model;
        $product->price = $request->price;
        $product->company = $request->company;
        $product->currency = $request->currency;
        $product->description = $request->description;


        foreach ($request->file('image') as $key => $image) {
            $imageName = time() . '_' . $key . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product_images'), $imageName);
            $product->{'image' . ($key + 1)} = $imageName;
        }

        $product->save();

        return redirect()->route('list')->with('success', 'Product added successfully.');
    }
    public function product_delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('list')->with('success', 'Product deleted successfully.');
    }
}
