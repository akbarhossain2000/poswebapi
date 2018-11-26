<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table    = "quotation";
    protected $primaryKey = "quotation_id";

    protected $fillable = [
        'customer_id',
        'order_date',
        'order_status'
    ];

    public $timestamps  = false;
}
