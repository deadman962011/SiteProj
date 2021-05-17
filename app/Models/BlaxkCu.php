<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BlaxkCu extends Authenticatable implements JWTSubject
{
 

    protected $fillable=['CustFullName','CustUserName','CustMail','CustPass','CustStatus','CustActiveToken','CustCountry','CustAddress','SiteId'];

    protected $hidden= ['CustPass'];

    public function getAuthPassword()
    {
        return $this->CustPass;
    }
    
   public function getJWTIdentifier()
   {
       return $this->getKey();
   }


   public function getJWTCustomClaims()
   {
       return [];
   }
}
