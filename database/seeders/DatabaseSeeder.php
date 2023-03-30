<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

     //1.7 Ejecutar seeeder
    public function run(): void
    {
        //4.91 agregar factory
        $this->call(UserSeeder::class); 
        \App\Models\Material::factory()->count(10)->create(); 
        $this->call(OrdenSeeder::class);
    }
}
