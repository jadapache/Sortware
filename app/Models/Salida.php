<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Salida extends Model
{
    use HasFactory;



    public function producto()
   {
    return $this->belongsTo('App\Models\Producto', 'producto_id');
    //return $this->belongsTo(Producto::class);

   }
   public function tipo_salidas(){
    return $this->belongsToMany(TipoSalida::class);
}
}
