<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlaxkPdf extends Model
{
    use HasFactory;

    //																

    protected $fillable=['BookName','BookPic','BookLink','BlaxkCategory','BlaxkAuthor','BookReview','BookDesc','BookLang','BookPagesNum','BookSize','BookRelaseDate','ViewsNum','DownloadsNum','BookStatus','BookFile','SiteId'];


    public function Category()
    {
        return $this->hasOne('App\Models\BlaxkCategory', 'id', 'BlaxkCategory');
    }

    public function Author()
    {
        return $this->hasOne('App\Models\BlaxkAuthor', 'id', 'BlaxkAuthor');
    }
    


}
