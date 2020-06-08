<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    protected $table = 'addproduct';
    protected $fillable = ['productcode','name','category','price','date','qty','cost','unit','image'];
}
