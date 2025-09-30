<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $table="dokumentasi";
    protected $fillable = [
       'img1',
        'img2',
        'img3',
        'video',
    ];
}
