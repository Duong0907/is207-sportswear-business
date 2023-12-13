<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'total_money',
        'paid',
        'shipping_note',
        'shipping_adress',
        'shipping_phonenumber',
        'shipping_firstname',
        'shipping_lastname',
    ];
    public $timestamps = true;
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
