<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productObjects extends Model
{
    use HasFactory;
    protected $fillable = [
        'object_name',
    ];
    public $timestamps = true;
    function product()
    {
        return $this->hasMany(product::class);
    }
}
