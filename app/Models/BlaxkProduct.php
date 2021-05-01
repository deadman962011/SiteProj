<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlaxkProduct extends Model
{
    use HasFactory;

    //				
    protected $fillable=['ProductName','ProductBody','ProductPrice','ProductDesc','ProductStatus','SiteId','ProductCategory','ProductBrand','ProductProps'];
    

    public function Category()
    {
        return $this->hasOne('App\Models\BlaxkCategory', 'id', 'ProductCategory');
    }

    public function Author()
    {
        return $this->hasOne('App\Models\BlaxkAuthor', 'id', 'ProductBrand');
    }


}
