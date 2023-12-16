<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Models\ProductObject;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    // Common methods for ProductsController
    public function getFilterProducts()
    {
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

        return [
            'Loại' => $product_types,
            'Đối tượng' => $product_objects,
            'Màu' => $colors,
            'Kích thước' => $sizes
        ];
    }

    public function haveNextPage($products, $page, $perPage) {
        if ($products->skip(($page) * $perPage)->take($perPage)->get()->count() == 0)
            return false;
        else
            return true;
    }

    // Input: $products: a query builder instance of Product
    public function paginateProducts(Request $request, $products) {
        // Pagination: return json if "page" >= 2
        $page = 1;
        $perPage = 6;

        if ($request->has('page'))
            $page = $request->page;

        $baseProducts = $products;
        $hasNext = $this->haveNextPage($baseProducts, $page, $perPage);

        $products = $baseProducts->skip(($request->page - 1) * $perPage)->take($perPage);

        $products = $products->get();

        // Return json
        if ($page >= 2)
        {
            // Also return image_link when return json
            for ($i = 0; $i < count($products); $i++)
            {
                if (count($products[$i]->images) > 0)
                    $products[$i]->image_link = $products[$i]->images[0]->image_link;
                else
                    $products[$i]->image_link = "https://st3.depositphotos.com/17828278/33150/v/450/depositphotos_331503262-stock-illustration-no-image-vector-symbol-missing.jpg";
            }
        }

        return [
            'products' => $products,
            'hasNext' => $hasNext
        ];
    }

    public function getProductsByTypeAndObject(Request $request) 
    {
        $products = Product::select("*");
        $title = "";
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

        return [
            'products' => $products,
            'title' => $title
        ];
    }
}
