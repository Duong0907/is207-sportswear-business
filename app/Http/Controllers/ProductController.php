<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductType;
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

        if ($request->has('page')) {
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

        if ($request->has('page')) {
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

        if ($request->has('page')) {
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

        if ($request->get('Đối_tượng') != "") {
            $object_names = explode(',', $request->get('Đối_tượng'));
        }

        if ($request->get('Loại') != "")
            $type_names = explode(',', $request->get('Loại'));

        if ($request->get('Màu') != "")
            $color_names = explode(',', $request->get('Màu'));

        if ($request->get('Kích_thước') != "")
            $size_names = explode(',', $request->get('Kích_thước'));

        // if all filter options are empty, return all products
        if (count($object_names) == 0 && count($type_names) == 0 && count($color_names) == 0 && count($size_names) == 0) {
            $products = Product::all();
        }

        function getProductsByFilter($baseQueryBuilder, $table, $column, $column_filter)
        {
            if (count($column_filter) > 0) {
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

        if ($request->has('page')) {
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
        try {
            $product = new Product();
            $product->product_name = $request->productName;
            $product->product_price = $request->productPrice;
            $product->product_description = $request->productDescription;
            $product->quantity = $request->productQuantity;
            $product->product_object_id = $request->productObject;
            $product->product_type_id = $request->productType;
            $product->save();
            // color and size
            $size_array = explode(', ', $request->productSizeId);
            $color_array = explode(', ', $request->productColorId);
            if (!empty($size_array))
                $product->sizes()->attach($size_array);
            if (!empty($color_array))
                $product->colors()->attach($color_array);
            // image
            foreach ($request['productImage'] as $image) {
                // upload to cloudinary in folder product-img-is207 and take the link and public_id (if you want to delete image)
                $newImage = cloudinary()->upload($image->getRealPath(), [
                    'folder' => 'product-img-is207'
                ]);
                $image_link = $newImage->getSecurePath();
                $public_id = $newImage->getPublicId();
                // dd($image_link, $public_id);
                $image = new Image();
                $image->image_link = $image_link;
                $image->public_id = $public_id;
                $image->product_id = $product->id;
                $image->save();
            }
            return redirect()->route('admin-product')->with('success', 'Thêm sản phẩm thành công!');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
        }
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
        // take image 
        $images = Image::where('product_id', $id)->get();
        return view('admin.product.edit', [
            'product' => $product,
            'allSizeOfProduct' => $allSizeOfProduct,
            'allColorOfProduct' => $allColorOfProduct,
            'allSizeIdOfProduct' => $allSizeIdOfProduct,
            'allColorIdOfProduct' => $allColorIdOfProduct,
            'sizes' => $sizes,
            'colors' => $colors,
            'productTypes' => $productTypes,
            'productObjects' => $productObjects,
            'images' => $images
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // dd($request->all());
            $product = Product::find($id);
            $product->product_name = $request->productName;
            $product->product_price = $request->productPrice;
            $product->product_description = $request->productDescription;
            $product->quantity = $request->productQuantity;
            $product->product_object_id = $request->productObject;
            $product->product_type_id = $request->productType;
            $product->save();
            // color and size
            $size_array = explode(', ', $request->productSizeId);
            $color_array = explode(', ', $request->productColorId);
            $product->sizes()->sync($size_array);
            $product->colors()->sync($color_array);
            // image
            if ($request->hasFile('productImage')) {
                $images = Image::where('product_id', $id)->get();
                foreach ($images as $image) {
                    // delete image in cloudinary
                    cloudinary()->destroy($image->public_id);
                    // delete image in database
                    $image->delete();
                }
                foreach ($request['productImage'] as $image) {
                    // upload to cloudinary in folder product-img-is207 and take the link and public_id (if you want to delete image)
                    $newImage = cloudinary()->upload($image->getRealPath(), [
                        'folder' => 'product-img-is207'
                    ]);
                    $image_link = $newImage->getSecurePath();
                    $public_id = $newImage->getPublicId();
                    // dd($image_link, $public_id);
                    $image = new Image();
                    $image->image_link = $image_link;
                    $image->public_id = $public_id;
                    $image->product_id = $product->id;
                    $image->save();
                }
            }
            return redirect()->route('admin-product')->with('success', 'Cập nhật sản phẩm thành công!');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $images = Image::where('product_id', $id)->get();
            foreach ($images as $image) {
                // delete image in cloudinary
                cloudinary()->destroy($image->public_id);
                // delete image in database
                $image->delete();
            }
            $product = Product::find($id);
            $product->delete();
            $product->colors()->detach();
            $product->sizes()->detach();
            return redirect()->route('admin-product')->with('success', 'Xóa sản phẩm thành công!');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
