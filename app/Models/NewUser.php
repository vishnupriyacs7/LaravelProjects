<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewUser extends Model
{
    
    protected $fillable = ['name','email','phone','place'];
    // protected $guarded = ['phone'];
    protected $hidden = ['phone'];
    // protected $casts = [
    //     'phone'      => 'integer',
    //     'created_at' => 'datetime',
    //     'updated_at' => 'datetime',
    // ];

}
