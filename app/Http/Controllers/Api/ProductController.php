<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $products=Product::with('category')->get();
        return response()->json([
            'status' => 'success',
            'data' => $products
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        'quantity' => 'required|integer|min:1',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
    }

    $product = Product::create([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
        'category_id' => $request->category_id,
        'quantity' => $request->quantity,
        'image' => $imagePath,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Product created successfully!',
        'data' => $product
    ], 201);
}


    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $product = Product::with('category')->find($id);

    if (!$product) {
        return response()->json([
            'status' => false,
            'message' => 'Product not found'
        ], 404);
    }

    return response()->json([
        'status' => true,
        'data' => $product
    ], 200);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $product = Product::find($id);
    if (!$product) {
        return response()->json([
            'status' => false,
            'message' => 'Product not found'
        ], 404);
    }

    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'description' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        'quantity' => 'required|integer|min:1',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = $product->image;
    if ($request->hasFile('image')) {
        if ($imagePath) {
            Storage::disk('public')->delete($imagePath);
        }
        $imagePath = $request->file('image')->store('products', 'public');
    }

    $product->update([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
        'category_id' => $request->category_id,
        'quantity' => $request->quantity,
        'image' => $imagePath,
    ]);

    return response()->json([
        'status' => true,
        'message' => 'Product updated successfully!',
        'data' => $product
    ], 200);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
