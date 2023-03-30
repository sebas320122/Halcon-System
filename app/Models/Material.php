<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //2.2 Eliminar timestamps
    public $timestamps = false;
    use HasFactory;
 
    //2.4 Establecer relacion
    public function ordens() { 
        return $this->belongsToMany(Orden::class); 
      } 
}
