<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table    = "sale";
    protected $primaryKey = "sale_id";

    protected $fillable = [
        'quotation_id',
    ];

    public $timestamps  = false;
}
