<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['ProductName', 'QuantityPerUnity', 'UnitPrice', 'UnitsInStock', 'categoryID', 'suppliersID'];
}
