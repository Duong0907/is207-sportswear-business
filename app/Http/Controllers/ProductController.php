<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;
use App\Models\Image;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Models\ProductObject;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $result = $this->getProductsByTypeAndObject($request);
        $products = $result['products'];
        $title = $result['title'];

        if ($title == "")
            $title = "Sản phẩm mới";

        // Pagination
        $result = $this->paginateProducts($request, $products);
        $products = $result['products'];
        $hasNext = $result['hasNext'];

        if ($request->has('page'))
        {
            return json_encode([
                'products' => $products,
                'hasNext' => $hasNext
            ]);
        }

        $filter = $this->getFilterProducts();

        $data = [
            'title' => $title,
            'subtitle' => 'Đắm chìm trong thế giới thể thao với những sản phẩm mới nhất tại cửa hàng của chúng tôi! Dòng sản phẩm mới này bao gồm đủ phụ kiện để bạn có thể chuẩn bị cho mọi hoạt động thể thao của mình.',
            'products' => $products,
            'hasNext' => $hasNext,
            'filter' => $filter,
            'filter_checked' => []
        ];

        return view('user.product_list', compact('data'));
    }

    public function renderNewProducts(Request $request)
    {
        $result = $this->getProductsByTypeAndObject($request);
        $products = $result['products'];
        $title = $result['title'];

        if ($title == "")
            $title = "Sản phẩm mới";

        // Sort by created_at to get newest products
        $products->orderBy('created_at', 'desc');

        // Pagination
        $result = $this->paginateProducts($request, $products);
        $products = $result['products'];
        $hasNext = $result['hasNext'];

        if ($request->has('page'))
        {
            return json_encode([
                'products' => $products,
                'hasNext' => $hasNext
            ]);
        }
    
        // Return view
        $data = [
            'title' => $title,
            'subtitle' => 'Đắm chìm trong thế giới thể thao với những sản phẩm mới nhất tại cửa hàng của chúng tôi! Dòng sản phẩm mới này bao gồm đủ phụ kiện để bạn có thể chuẩn bị cho mọi hoạt động thể thao của mình.',
            'products' => $products,
            'hasNext' => $hasNext,
            'filter' => $this->getFilterProducts(),
            'filter_checked' => []
        ];

        return view('user.product_list', compact('data'));
    }

    public function renderSearchProducts(Request $request)
    {
        $keyword = $request->keyword;
        $products = Product::where('product_name', 'like', '%' . $keyword . '%');

        // Pagination
        $result = $this->paginateProducts($request, $products);
        $products = $result['products'];
        $hasNext = $result['hasNext'];

        if ($request->has('page'))
        {
            return json_encode([
                'products' => $products,
                'hasNext' => $hasNext
            ]);
        }

        $filter = $this->getFilterProducts();

        $data = [
            'title' => "Tìm kiếm",
            'subtitle' => 'Kết quả tìm kiếm cho: ' . $keyword,
            'products' => $products,
            'hasNext' => $hasNext,
            'filter' => $filter,
            'filter_checked' => []
        ];

        return view('user.product_list', compact('data'));
    }

    public function renderHome(Request $request)
    {
        // Get 3 products with highest purchasing quantity
        $products = Product::all()->sortByDesc('purchasing_quantity')->take(3);
        return view('user.home', compact('products'));
    }

    public function renderFilterProducts(Request $request) 
    {
        // Get all filter options in url query
        $object_names = [];
        $type_names = [];
        $color_names = [];
        $size_names = [];

        if ($request->get('Đối_tượng') != "")
        {
            $object_names = explode(',', $request->get('Đối_tượng'));
        }

        if ($request->get('Loại') != "")
            $type_names = explode(',', $request->get('Loại'));

        if ($request->get('Màu') != "")
            $color_names = explode(',', $request->get('Màu'));

        if ($request->get('Kích_thước') != "")
            $size_names = explode(',', $request->get('Kích_thước'));

        // if all filter options are empty, return all products
        if (count($object_names) == 0 && count($type_names) == 0 && count($color_names) == 0 && count($size_names) == 0)
        {
            $products = Product::all();
        }

        function getProductsByFilter($baseQueryBuilder, $table, $column, $column_filter)
        {
            if (count($column_filter) > 0)
            {
                return $baseQueryBuilder->whereHas($table, function ($query) use ($column, $column_filter) {
                    $query->whereIn($column, $column_filter);
                });
            } else {
                // return empty collection
                return $baseQueryBuilder;
            }
        }

        // Get all products that match the filter options
        $products = Product::select("*");
        
        $object_products = getProductsByFilter($products, 'productObject', 'object_name', $object_names);
        $type_products = getProductsByFilter($object_products, 'productType', 'type_name', $type_names);
        $color_products = getProductsByFilter($type_products, 'colors', 'color_name', $color_names);
        $size_products = getProductsByFilter($color_products, 'sizes', 'size_name', $size_names);
        
        // $products = $size_products->get();

        // Pagination
        $result = $this->paginateProducts($request, $size_products);
        $products = $result['products'];
        $hasNext = $result['hasNext'];

        if ($request->has('page'))
        {
            return json_encode([
                'products' => $products,
                'hasNext' => $hasNext
            ]);
        }

        // Checked filter options
        $filter_checked = array_merge($object_names, $type_names, $color_names, $size_names);

        $data = [
            'title' => "Bộ lọc",
            'subtitle' => 'Bộ lọc dành cho: ' . $request->get('Đối_tượng') . ' ' . $request->get('Loại') . ' ' . $request->get('Màu') . ' ' . $request->get('Kích_thước'),
            'products' => $products,
            'hasNext' => $hasNext,
            'filter' => $this->getFilterProducts(),
            'filter_checked' => $filter_checked
        ];

        return view('user.product_list', compact('data'));
    }

    public function renderProductDetail(Request $request)
    {
        $id = $request->id;

        $product = Product::find($id);
        return view('user.product_detail', compact('product'));
    }

    public function renderCart(Request $request)
    {
        // Get user's id from auth
        $user_id = auth()->user()->id;
        // return $user_id;

        // Get all order with unpaid = true
        $cart = Order::where('user_id', $user_id)->where('paid', false)->get();
        return view('user.cart', compact('cart'));
    }

    public function gerProductInfo(Request $request)
    {
        // include first image of product
        $id = $request->id;
        $product = Product::find($id);
        if ($product->images->count() > 0)
            $image_link = 'https://st3.depositphotos.com/17828278/33150/v/450/depositphotos_331503262-stock-illustration-no-image-vector-symbol-missing.jpg';
        $image_link = $product->images->first()->image_link;

        return json_encode([
            'id' => $product->id,
            'product_name' => $product->product_name,
            'image_link' => $image_link,
            'product_price' => $product->product_price,
            'quantity' => $product->quantity
        ]);
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
        // dd($id);
        $sizes = Size::all();
        $colors = Color::all();
        $productTypes = ProductType::all();
        $productObjects = ProductObject::all();
        $product = Product::find($id);
        // take all size of product
        $allSizeOfProduct = helperConvertAttribute($product->sizes, 'size_name');
        // take all sizeId of product
        $allSizeIdOfProduct = helperConvertAttribute($product->sizes, 'id');
        // take all color of product
        $allColorOfProduct = helperConvertAttribute($product->colors, 'color_name');
        // take all colorId of product
        $allColorIdOfProduct = helperConvertAttribute($product->colors, 'id');
        return view('admin.product.edit', [
            'product' => $product,
            'allSizeOfProduct' => $allSizeOfProduct,
            'allColorOfProduct' => $allColorOfProduct,
            'allSizeIdOfProduct' => $allSizeIdOfProduct,
            'allColorIdOfProduct' => $allColorIdOfProduct,
            'sizes' => $sizes,
            'colors' => $colors,
            'productTypes' => $productTypes,
            'productObjects' => $productObjects
        ]);
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
