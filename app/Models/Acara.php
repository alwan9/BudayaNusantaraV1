<?php

namespace App\Models;

use Doctrine\DBAL\Schema\Column;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    //

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
        'kategori_id',
        'asal', // general provinsi
        'owner',
    ];
    public function images()
    {
        return $this->belongsTo(Image::class, 'img');
    }



    public function user()
    {
        return $this->belongsTo(User::class, 'owner');
    }
    public function kategori()
    {
        return $this->belongsTo(\App\Models\Kategori::class, 'kategori_id');
    }
}