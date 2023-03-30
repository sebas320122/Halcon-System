<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    #2.3 Eliminar timestamps
    public $timestamps = false;
    use HasFactory;
    //2.5 Establecer relacion
    public function materials() { 
        return $this->hasOne(Material::class); 
      } 

      //5.6 modificar fillable  
      protected $fillable = [
        'num_cliente',
        'num_factura',
        'empresa',
        'datos_fiscales',
        'direccion',
        'estado',
        'foto_carga',
        'foto_entrega',
        'material_id'
    ];
}
