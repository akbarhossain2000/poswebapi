<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    protected $primaryKey = "cat_id";

    protected $fillable = [
        'cat_name',
        'is_active'
    ];

    public $timestamps = false;

}
