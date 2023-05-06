<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 
class OrdenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //5.7 crear seeder para ordenes
    public function run(): void
    {
        DB::table('ordens')->insert([
            [ 
            'num_cliente' => '1', 
            'num_factura' => '1',
            'empresa' => 'Japac',
            'datos_fiscales' => 'Datos 1', 
            'direccion' => 'Direccion 1',
            'estado' => 'procesando',
            'foto_carga' => null,
            'foto_entrega' => null,
            'material_id' => '1',
            ],
            [ 
                'num_cliente' => '2', 
                'num_factura' => '2',
                'empresa' => 'Constructora',
                'datos_fiscales' => 'Datos 2', 
                'direccion' => 'Direccion 2',
                'estado' => 'enviado',
                'foto_carga' => null,
                'foto_entrega' => null,
                'material_id' => '2',
            ],
            [ 
                'num_cliente' => '3', 
                'num_factura' => '3',
                'empresa' => 'Obras publicas',
                'datos_fiscales' => 'Datos 3', 
                'direccion' => 'Direccion 3',
                'estado' => 'entregado',
                'foto_carga' => null,
                'foto_entrega' => null,
                'material_id' => '3',
            ],
            [ 
                'num_cliente' => '4', 
                'num_factura' => '4',
                'empresa' => 'Constructora 2',
                'datos_fiscales' => 'Datos 4', 
                'direccion' => 'Direccion 4',
                'estado' => 'archivado',
                'foto_carga' => null,
                'foto_entrega' => null,
                'material_id' => '4',
            ],
            [ 
                'num_cliente' => '5', 
                'num_factura' => '5',
                'empresa' => 'Constructora 5',
                'datos_fiscales' => 'Datos 5', 
                'direccion' => 'Direccion 5',
                'estado' => 'enviado',
                'foto_carga' => 'uploads/envio_ejemplo.jpg',
                'foto_entrega' => null,
                'material_id' => '5',
            ],
            [ 
                'num_cliente' => '6', 
                'num_factura' => '6',
                'empresa' => 'Constructora 6',
                'datos_fiscales' => 'Datos 6', 
                'direccion' => 'Direccion 6',
                'estado' => 'entregado',
                'foto_carga' => null,
                'foto_entrega' => 'uploads/entrega_ejemplo.jpg',
                'material_id' => '6',
            ]
            
    ]);
    }
}
