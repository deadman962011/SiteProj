<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlaxkBlog extends Model
{
    use HasFactory;

    //									
    protected $fillable=['BlogTitle','BlogBody','BlogDesc','BlogCategory','BlogAuthor','SiteId','ViewNum','BlogTags','BlogThumb','BlogStatus'];


    public function Category()
    {
        return $this->hasOne('App\Models\BlaxkCategory', 'id', 'BlogCategory');
    }

    public function Author()
    {
        return $this->hasOne('App\Models\BlaxkAuthor', 'id', 'BlogAuthor');
    }



}
