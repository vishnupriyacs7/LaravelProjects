<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RUDModel extends Model
{
   protected $fillable = [
        'name',
        'email',
        'password',
    ];
    

}
