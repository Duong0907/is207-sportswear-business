<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';
    protected $fillable = ['color_name', 'hex_code'];
    use HasFactory;

    function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
