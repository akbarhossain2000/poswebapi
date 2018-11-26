<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table    = "customer";
    protected $primaryKey = "customer_id";

    protected $fillable = [
        'customer_name',
        'phone_no',
        'address'
    ];

    public $timestamps  = false;
}
