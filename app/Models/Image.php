<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
   protected $table="images";
    protected $fillable = [
       'img1',
        'img2',
        'img3',
        'video',
        'jenis',
    ];
}
