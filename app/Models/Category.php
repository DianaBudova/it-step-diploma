<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
        'title',
        'price',
        'discount_price',
        'quantity',
        'category_id',
        'brand_id',
        'description',
        'slug'
    ];
}
