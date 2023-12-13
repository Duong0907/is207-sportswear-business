<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductObject extends Model
{
    use HasFactory;
    protected $table = 'product_objects';
    protected $fillable = [
        'object_name',
    ];
    public $timestamps = true;
    function products()
    {
        return $this->hasMany(product::class);
    }
}
