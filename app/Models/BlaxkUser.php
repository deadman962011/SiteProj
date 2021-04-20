<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class BlaxkUser extends Authenticatable
{
 

    protected $fillable=['BlaxkUser','BlaxkPass'];

    protected $hidden=['BlaxkPass'];

    public function getAuthPassword()
    {
        return $this->BlaxkPass;
    }

}
