<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'title',
        'description',
        'price',
        'discount_price',
        'quantity',
        'slug'
    ];
}