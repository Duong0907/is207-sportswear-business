<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discounts';
    protected $fillable = ['start_date', 'end_date', 'discount_percent'];
    use HasFactory;

    function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
