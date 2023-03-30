<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str; 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    //1.6 Crear seeder para usuario admin
    public function run(): void
    {
        DB::table('users')->insert([ 
            'name' => 'Sebastian',
            'email' => 'sebas@gmail.com',
            'password' => Hash::make('password'),
            'rol' => 'admin', 
            'status' => 'activo' //3.7 Agregar atributo a seeder
          ]); 
    }
}
