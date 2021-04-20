<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlaxkFolder extends Model
{
    use HasFactory;

    //				
    protected $fillable=['AuthorPic','File','Thumbnail','SiteId'];

}
