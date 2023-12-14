<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductObject;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = "";
        $products = Product::select("*");
        if ($request->has('type')) {
            $products = $products->where('product_type_id', $request->type);
            $type = ProductType::find($request->type);
            $title .= $type->type_name . ' ';
        }

        if ($request->has('object')) {
            $products = $products->where('product_object_id', $request->object)
                ->orWhere('product_object_id', 4); // Unisex;
            $object = ProductObject::find($request->object);
            $title .= $object->object_name . ' ';
        }

        if ($title == "")
            $title = "Sản phẩm mới";

        $products = $products->get();

        // For filters
        $product_types = ProductType::all();
        $product_types = $product_types->map(function ($product_type) {
            return ['item' => $product_type->type_name];
        });


        $product_objects = ProductObject::all();
        $product_objects = $product_objects->map(function ($product_object) {
            return ['item' => $product_object->object_name];
        });

        $colors = Color::all()->take(5);
        $colors = $colors->map(function ($color) {
            return ['item' => $color->color_name];
        });

        $sizes = Size::all();
        $sizes = $sizes->map(function ($size) {
            return ['item' => $size->size_name];
        });

        $data = [
            'title' => $title,
            'subtitle' => 'Đắm chìm trong thế giới thể thao với những sản phẩm mới nhất tại cửa hàng của chúng tôi! Dòng sản phẩm mới này bao gồm đủ phụ kiện để bạn có thể chuẩn bị cho mọi hoạt động thể thao của mình.',
            'products' => $products,
            'filter' => [
                'Loại' => $product_types,
                'Đối tượng' => $product_objects,
                'Màu' => $colors,
                'Kích thước' => $sizes
            ]
        ];

        return view('user.product_list', compact('data'));
    }

    public function renderNewProducts(Request $request)
    {
        $title = "";
        $products = Product::select("*");
        if ($request->has('type')) {
            $products = $products->where('product_type_id', $request->type);
            $type = ProductType::find($request->type);
            $title .= $type->type_name . ' ';
        }

        if ($request->has('object')) {
            $products = $products->where('product_object_id', $request->object)
                ->orWhere('product_object_id', 4); // Unisex;
            $object = ProductObject::find($request->object);
            $title .= $object->object_name . ' ';
        }

        if ($title == "")
            $title = "Sản phẩm mới";

        $products->orderBy('created_at', 'desc');
        $products = $products->get();

        // For filters
        $product_types = ProductType::all();
        $product_types = $product_types->map(function ($product_type) {
            return ['item' => $product_type->type_name];
        });


        $product_objects = ProductObject::all();
        $product_objects = $product_objects->map(function ($product_object) {
            return ['item' => $product_object->object_name];
        });

        $colors = Color::all();
        $colors = $colors->map(function ($color) {
            return ['item' => $color->color_name];
        });

        $sizes = Size::all();
        $sizes = $sizes->map(function ($size) {
            return ['item' => $size->size_name];
        });

        $data = [
            'title' => $title,
            'subtitle' => 'Đắm chìm trong thế giới thể thao với những sản phẩm mới nhất tại cửa hàng của chúng tôi! Dòng sản phẩm mới này bao gồm đủ phụ kiện để bạn có thể chuẩn bị cho mọi hoạt động thể thao của mình.',
            'products' => $products,
            'filter' => [
                'Loại' => $product_types,
                'Đối tượng' => $product_objects,
                'Màu' => $colors,
                'Kích thước' => $sizes
            ]
        ];

        // return json_encode($products->colors());

        return view('user.product_list', compact('data'));
    }

    public function renderSearchProducts(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::where('product_name', 'like', '%' . $keyword . '%')->get();

        // For filters
        $product_types = ProductType::all();
        $product_types = $product_types->map(function ($product_type) {
            return ['item' => $product_type->type_name];
        });


        $product_objects = ProductObject::all();
        $product_objects = $product_objects->map(function ($product_object) {
            return ['item' => $product_object->object_name];
        });

        $colors = Color::all();
        $colors = $colors->map(function ($color) {
            return ['item' => $color->color_name];
        });

        $sizes = Size::all();
        $sizes = $sizes->map(function ($size) {
            return ['item' => $size->size_name];
        });

        $data = [
            'title' => "Tìm kiếm",
            'subtitle' => 'Kết quả tìm kiếm cho: ' . $keyword,
            'products' => $products,
            'filter' => [
                'Loại' => $product_types,
                'Đối tượng' => $product_objects,
                'Màu' => $colors,
                'Kích thước' => $sizes
            ]
        ];

        return view('user.product_list', compact('data'));
    }

    public function renderHome(Request $request)
    {
        // purchasing_quantity
        $products = Product::all()->sortByDesc('purchasing_quantity')->take(3);
        return view('user.home', compact('products'));
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

    public function adminIndex()
    {
        $products = Product::all();
        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        $sizes = Size::all();
        $colors = Color::all();
        $productTypes = ProductType::all();
        $productObjects = ProductObject::all();
        return view('admin.product.create', [
            'sizes' => $sizes,
            'colors' => $colors,
            'productTypes' => $productTypes,
            'productObjects' => $productObjects
        ]);
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
