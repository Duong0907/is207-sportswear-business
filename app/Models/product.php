<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_price',
        'rating',
        'purchasing_quantity',
        'amount',
        'production_day',
        'product_description',
        'product_size',
        'product_color',
        'product_image',
        'product_object_id',
        'product_type_id',
    ];
    public $timestamps = true;
    function productObject()
    {
        return $this->belongsTo(productObjects::class);
    }
    function productType()
    {
        return $this->belongsTo(productTypes::class);
    }
}
