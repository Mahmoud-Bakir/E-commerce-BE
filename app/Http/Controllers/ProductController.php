<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function storeProducts(Request $request)
    
    {
        $imagePath = 'C:\Users\Mahmoud Bakir\Desktop\SEF_2023\Assignments\E-commerce\E-commerce-FE\assets\p1.png';

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|numeric',
            'gender' => 'required|numeric',
        ]);

        $image = $request->file('image');
        $imageData = base64_encode(file_get_contents($image->getRealPath()));
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->image = $imageData;
        $product->category = $request->input('category');
        $product->gender = $request->input('gender');
        $product->save();

        return response()->json(['message' => 'Product created successfully'], 201);
    }
}
