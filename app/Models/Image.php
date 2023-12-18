<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = [
        'image_link',
        'product_id',
        'public_id'
    ];
    use HasFactory;

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
