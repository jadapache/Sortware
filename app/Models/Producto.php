<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'estado',
    ];

    public function salidas(){
        return $this->hasMany('App\Models\Salida', 'producto_id');
    }

    public function entradas(){
        return $this->hasMany('App\Models\Entrada', 'producto_id');
    }
}
