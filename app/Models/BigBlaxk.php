<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BigBlaxk extends Authenticatable
{

    protected $fillable = [
        'BigBlaxkUser','BigBlaxkPass'
    ];



    public function getAuthPassword()
    {
        return $this->BigBlaxkPass;
    }

}
