<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $table = 'sizes';
    protected $fillable = [
        'size_name',
    ];
    public $timestamps = true;
    
    function product()
    {
        return $this->belongsToMany(Product::class, 'product_sizes', 'product_id', 'size_id');
    }
}
