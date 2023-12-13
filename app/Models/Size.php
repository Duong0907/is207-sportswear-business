<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $fillable = ['size_name'];
    use HasFactory;

    function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
