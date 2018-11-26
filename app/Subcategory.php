<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table    = "subcategory";
    protected $primaryKey = "subcat_id";

    protected $fillable = [
        'cat_id',
        'cat_name',
        'is_active'
    ];

    public $timestamps  = false;
}
