<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BlaxkSite extends Authenticatable implements JWTSubject
{

   public function getJWTIdentifier()
   {
       return $this->getKey();
   }


   public function getJWTCustomClaims()
   {
       return [];
   }

    //

    protected $fillable=['SiteName','SiteType','PlanType','SiteUser','ClientToken'];

    public function getAuthPassword()
    {
        return $this->ClientToken;
    }

}
