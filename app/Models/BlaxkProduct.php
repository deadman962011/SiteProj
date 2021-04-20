<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlaxkProduct extends Model
{
    use HasFactory;

    //				
    protected $fillable=['ProductName','ProductPrice','ProductDesc','SiteId','ProductCategory'];

}
