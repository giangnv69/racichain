<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductParameter extends Model
{
    protected $table = 'product_parameters';
    protected $fillable = ['id', 'name','type', 'created_at', 'updated_at'];

    public $timestamps = true;
}
