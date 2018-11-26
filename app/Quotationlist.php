<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotationlist extends Model
{
    protected $table    = "quotationlist";
    protected $primaryKey = "quotationlist_id";

    protected $fillable = [
        'quotation_id',
        'product_id',
        'quantity',
        'total_price',
    ];

    public $timestamps  = false;
}
