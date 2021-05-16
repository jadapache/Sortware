<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSalida extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title'
    ];

    public function salidas()
    {
        return $this->belongsToMany(Salida::class);
    }

}
