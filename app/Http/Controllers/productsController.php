<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productsController extends Controller
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
        $products = product::all();
        return view('user.product_list', [
            'products' => $products
        ]);
    }

    public function renderSearchProducts()
    {
        $products = product::all();
        return view('user.product_list', [
            'products' => $products
        ]);
    }

    public function renderProductDetail(Request $request)
    {
        return $request->id;
        // return view('user.product_detail');
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
