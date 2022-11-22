<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    use HasFactory;
    protected $fillable = [
        "name", 
        "jk", 
    ];
    public function anak_ortu()
    {
        return $this->hasMany(Anak::class);
    }
}
