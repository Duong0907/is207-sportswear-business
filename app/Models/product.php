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
}
