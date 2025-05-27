<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileUploadModel extends Model
{
    protected $table = 'upload'; 
    protected $fillable = [
        'image',
    ];

}
