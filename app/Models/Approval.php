<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
     use HasFactory;

     public $table="artikel_approvals";
    protected $fillable = [
        'artikel_id',
        'approve',
        'approved_by',
    ];

    /**
     * Relasi ke artikel.
     * Approval ini milik satu artikel.
     */
    public function artikel()
    {
        return $this->belongsTo(Artikel::class, 'artikel_id');
    }

    /**
     * Relasi ke user/admin yang menyetujui.
     */
    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}