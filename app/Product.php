<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table    = "product";
    protected $primaryKey = "product_id";

    protected $fillable = [
        'product_name',
        'description',
        'image',
        'code',
        'subcat_id',
        'cost',
        'price',
        'is_active'
    ];

    public $timestamps  = false;
}
