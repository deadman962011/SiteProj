<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlaxkAd extends Model
{
    use HasFactory;

    //								
    protected $fillable= ['AdName','AdImage','AdStatus','AdValue','AdView','AdClick','SiteId'];

}
