<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelHasRoles extends Model
{
    public $table="model_has_roles";
    protected $primaryKey="model_id";
    protected $fillable = [
        'role_id',
        
    ];

    public $timestamps=false;

    public function users(){
        return $this->belongsTo(User::class,'model_id');
    }
    public function roles(){
        return $this->belongsTo(Role::class,'role_id');
    }




}
