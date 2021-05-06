<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;


class BlaxkCust extends Authenticatable implements JWTSubject
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
     protected $fillable=['CustFullName','CustUserName','CustMail','CustPass','CustStatus','CustActiveToken','CustCountry','CustAddress','SiteId'];

     public function getAuthPassword()
     {
         return $this->CustPass;
     }



}
