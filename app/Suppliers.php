<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $fillable = ['companyname', 'contactName', 'address', 'city', 'phone'];
}
