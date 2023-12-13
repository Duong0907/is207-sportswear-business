<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('images')->get();
        foreach ($products as $product) {
            $product->images = json_decode($product->images);
        }

        return view('user.product_list', compact('products'));
        // compact('products') is the same as ['products' => $products]
    }

    public function renderNewProducts()
    {
        $products = Product::with('images')->get();
        foreach ($products as $product) {
            $product->images = json_decode($product->images);
        }

        return view('user.product_list', compact('products'));
    }

    public function renderSearchProducts()
    {
        $products = product::all();
        return view('user.product_list', [
            'products' => $products
        ]);
    }

    public function renderProductDetail(Request $request) {
        $product_id = $request->id;

        // $products = Product::where('id', $product_id)->first();
        // $images = Image::where('product_id', $product_id)->get();
        // $colors = DB::select('select * from colors join product_colors on colors.id = product_colors.color_id where product_colors.product_id = ?', [$product_id]);
        // $sizes = DB::select('select * from sizes join product_sizes on sizes.id = product_sizes.size_id  where product_sizes.product_id = ?', [$product_id]);

        $product = Product::with('colors', 'sizes', 'images')->find($product_id);

        foreach ($product->colors as $color) {
            echo $color->name;
        }

        foreach ($product->sizes as $size) {
            echo $size->name;
        }

        foreach ($product->images as $image) {
            echo $image->url;
        }

        return json_encode($product);

        // $data = [
        //     'product' => $products,
        //     'images' => $images,
        //     'colors' => $colors,
        //     'sizes' => $sizes
        // ];

        // $products = DB::select('select * from products join product_colors on products.id = product_colors.product_id join colors on product_colors.color_id = colors.id join product_sizes on products.id = product_sizes.product_id join sizes on product_sizes.size_id = sizes.id join images on products.id = images.product_id where products.id = ?', [$product_id]);
        // return json_encode($data);
        return view('user.product_detail', compact('data'));
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
