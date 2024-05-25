<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'product_price',
        'rating',
        'purchasing_quantity',
        'quantity',
        'product_description',
    ];

    public $timestamps = true;

    function productObject()
    {
        return $this->belongsTo(ProductObject::class);
    }

    function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    function images()
    {
        return $this->hasMany(Image::class);
    }

    function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors', 'product_id', 'color_id');
    }

    function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_sizes', 'product_id', 'size_id');
    }

    function comments()
    {
        return $this->hasMany(Comment::class);
    }

    function discounts()
    {
        return $this->belongsToMany(Discount::class, 'discount_products', 'product_id', 'discount_id');
    }

    function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'product_id', 'order_id')
            ->withPivot('quantity')
            ->withPivot('color_hex_code')
            ->withPivot('size_name')
            ->withTimestamps();
    }
}
