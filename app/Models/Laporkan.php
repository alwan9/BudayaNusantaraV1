<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporkan extends Model
{
    protected $table = "laporkan";

    protected $fillable = [
        'judul_acara',        // Judul acara
        'acara_id',            // Tanggal laporan / kejadian
        'dokumentasi',            // Tanggal laporan / kejadian
        'user_acara_id', // ID atau nama user pembuat acara     
        'user_pelapor_id', // ID atau nama user pembuat acara     
        'keterangan',         // Keterangan atau keluhan
        'jenis_keluhan',      // Jenis keluhan (penipuan, tidak amanah, dll)
    ];


    public function dokumentasi_id()
    {
        return $this->belongsTo(Dokumentasi::class, 'dokumentasi'  );
    }
    public function acara()
    {
        return $this->belongsTo(Acara::class, 'acara_id', 'id');
    }


}
