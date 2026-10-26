<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderProduct extends Model
{
    use HasFactory;

    protected $filable = ['product_id', 'title', 'price', 'qty'];

    public $timestamps = false;
}
