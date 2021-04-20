<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlaxkSite extends Model
{
    use HasFactory;

    //

    protected $fillable=['SiteName','SiteType','PlanType','SiteUser','ClientToken'];


}
