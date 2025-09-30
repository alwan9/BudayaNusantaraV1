<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
      protected $table="artikel";
    protected $fillable = [
        'judul',
        'tanggal_mulai',
        'tanggal_akhir',
        'img',
        'des_singkat',
        'detail_acara',
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
    public function approval()
    {
        return $this->hasOne(\App\Models\Approval::class, 'artikel_id');
    }
}