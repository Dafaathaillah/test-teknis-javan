<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cucu extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", 
        "jk", 
        "orangtua2_id", 
    ];
    public function ortu2()
    {
        return $this->belongsTo(Anak::class, 'orangtua2_id');
    }
}
