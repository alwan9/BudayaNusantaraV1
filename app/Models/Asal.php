<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asal extends Model
{
      protected $table="acara";
    protected $fillable = [
        'judul',
        'tanggal_mulai',
        'tanggal_akhir',
        'img',
        'lokasi',
        'des_singkat',
        'detail_acara',
        'htm',
        'no_panitia',
        'kategori',
        'asal', // general provinsi
    ];
}
