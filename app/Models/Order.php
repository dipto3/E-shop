<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'email',
        'phone',
        'address',
        'city',
        'district',
        'zip_code',
        'product_name',
        'product_id',
        'size',
        'color',
        'qty',
        'total_price',
        'image',
        'payment_status',
        'delivery_status',
    ];
}
