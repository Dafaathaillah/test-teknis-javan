<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", 
        "jk", 
        "orangtua1_id", 
    ];
    public function ortu1()
    {
        return $this->belongsTo(Orangtua::class, 'orangtua1_id');
    }
    public function cucu_ortu()
    {
        return $this->hasMany(Cucu::class);
    }
}
