<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlaxkCategory extends Model
{
    use HasFactory;

    
						


    protected $fillable=['CategoryName','CategoryIcon','CategoryColor','ItemNum','SiteId'];

}
