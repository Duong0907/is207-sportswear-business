<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // take all products and images of each product
        $products = Product::with('images')->get();
        // decode images json in products
        // foreach ($products as $product) {
        //     $product->images = json_decode($product->images);
        // }
        // return json_encode($products);
        return view('user.product_list', [
            'products' => $products
        ]);
        // compact('products') is the same as ['products' => $products]
    }

    public function renderNewProducts()
    {
        $products = Product::all();

        // return json_encode($products->colors());

        return view('user.product_list', compact('products'));
    }

    public function renderSearchProducts()
    {
        $products = Product::all();
        return view('user.product_list', [
            'products' => $products
        ]);
    }

    public function renderProductDetail(Request $request)
    {
        $id = $request->id;

        $product = Product::find($id);
        // $images = $product->images();
        // $colors = $product->colors();
        // $sizes = $product->sizes();
        // $comments = $product->comments();

        // return json_encode([
        //     'product' => $product,
        //     'images' => $product->images,
        //     'colors' => $product->colors,
        //     'sizes' => $product->sizes,
        //     'comments' => $product->comments
        // ]);
        return view('user.product_detail', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
